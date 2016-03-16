<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

// use App\Http\Requests;

class PostsController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function getPosts($pageNo)
    {
    	// Retreiving all the posts and the respective paragraphs
        $posts = DB::table('posts')
        		 ->leftJoin('post_paragraph_mapping','post_paragraph_mapping.post_id','=','posts.id')
        		 ->leftJoin('paragraphs','post_paragraph_mapping.paragraph_id','=','paragraphs.id')
        		 ->whereBetween('posts.id',[(($pageNo-1)*5)+1,$pageNo*5])
        		 ->select('posts.id as postId','posts.title','paragraphs.text as paragraph','paragraphs.id as paragraphId','paragraphs.seq_no',DB::raw('"" as comments'))
        		 ->orderBy('posts.id')
        		 ->orderBy('paragraphs.seq_no')
        		 ->get();
        		 
        // Collect is a laravel function to convert the array of objects into type collection
        $postCollection = collect($posts);
        // Pluck out all the paragraph id's fetched to retrieve the respective comments
        $paragraphIds = array_pluck($posts,'paragraphId');
        // Group all the paragraphs of a specific post as one object
        $postCollection = $postCollection->groupBy('postId');
        
        

        // Retreiving all the comments of the paragraphs fetched in the first query
         $comments = DB::table('paragraphs')
        		 ->leftJoin('paragraph_comments_mapping','paragraph_comments_mapping.paragraph_id','=','paragraphs.id')
        		 ->leftJoin('comments','paragraph_comments_mapping.comment_id','=','comments.id')
        		 ->whereIn('paragraphs.id',$paragraphIds)
        		 ->select('paragraphs.id as paragraphId','comments.comment')
        		 ->get();
        $commentsCollection = collect($comments);
        $commentsCollection = $commentsCollection->groupBy('paragraphId');

        // Loop through all the posts 
        foreach ($postCollection as $post) {
        	// Loop through all the paragraphs of the post
        	foreach ($post as $paragraph) {
        		// Grouping all the comments of a specific pragraph as one object
        		foreach ($commentsCollection as $key => $commentObj) {
        			if ($paragraph->paragraphId==$key) {
        				$paragraph->comments = $commentObj;
        			}
        		}
        	}
        }
        return $postCollection;
    }

    public function createPost(Request $request){
    	$text=$request['text'];
    	// Divide the paragraphs depending on the 2 new lines
    	$paragraphs=explode(PHP_EOL.PHP_EOL,$text);
    	$postId=DB::table('posts')->insertGetId(['title' => $request['title'] ]);
    	$count=1;
    	// Insert all the paragraphs of the new post in paragraphs table along with mapping
    	foreach ($paragraphs as $paragraph) {
    		$paragraphId=DB::table('paragraphs')->insertGetId(['seq_no' => $count++,'text' => $paragraph ]);
    		DB::table('post_paragraph_mapping')->insert(['post_id'=>$postId,'paragraph_id'=>$paragraphId]);
    	}
    	return "successfully created the post";
    }

    public function getParagraphsOfPost($postId){
    	// Get all the paragraphs and respective comments of the paragraphs
    	$paragraphs=DB::table('paragraphs')
        		 ->leftJoin('paragraph_comments_mapping','paragraph_comments_mapping.paragraph_id','=','paragraphs.id')
        		 ->join('post_paragraph_mapping', function($join) use ($postId){
                        $join->on('post_paragraph_mapping.paragraph_id', '=', 'paragraphs.id')
                             ->where('post_paragraph_mapping.post_id', '=', $postId);
                    })
        		 ->leftJoin('comments','paragraph_comments_mapping.comment_id','=','comments.id')
        		 ->orderBy('paragraphs.seq_no')
        		 ->select('paragraphs.id as paragraphId','paragraphs.seq_no','paragraphs.text','comments.comment')
        		 ->get();
        // Get the title of the post
        $post=DB::table('posts')
        		->where('id',$postId)
        		->select('title')
        		->get();
        		
        $paragraphsCollection = collect($paragraphs);
        $paragraphsCollection = $paragraphsCollection->groupBy('paragraphId');

        return array('postId' => $postId,'title' =>$post[0]->title,'text'=> $paragraphsCollection);
    }

    public function addComment(Request $request){
    	// Insert comment in the comments table and get the inserted id
    	$commentId=DB::table('comments')->insertGetId(['comment' => $request['comment']]);
    	// Map the inserted comment with the paragraph
    	DB::table('paragraph_comments_mapping')->insert(
    		['paragraph_id'=>$request['paragraph_id'],'comment_id'=>$commentId]
    	);
    	return 'comment have been added successfully';
    }

    public function addParagraph(Request $request){
    	// Increase the current paragraphs sequence_no to place this paragraph in proper order
    	DB::table('paragraphs')
    	->join('post_paragraph_mapping', function($join) use ($request){
                $join->on('post_paragraph_mapping.paragraph_id', '=', 'paragraphs.id')
                             ->where('post_paragraph_mapping.post_id', '=', $request['post_id']);
        })
        ->where('seq_no','>=',$request['seq_no'])
    	->increment('seq_no');
    	// Insert the new paragraph in paragraphs table
    	$paragraphId = DB::table('paragraphs')->insertGetId(
				    		['text'=>$request['text'],'seq_no'=>$request['seq_no']]
				        );
    	// Insert the mapping
    	DB::table('post_paragraph_mapping')->insert(
    		['post_id'=>$request['post_id'],'paragraph_id'=>$paragraphId]
    	);
    	
    	return 'Paragraph have been added successfully';
    }
}

