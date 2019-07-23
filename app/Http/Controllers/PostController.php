<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function oldestPost()
    {
    	$posts = Post::where('status', 1)->where('approval_status', 1)->paginate(4);
    		  
    	return view('front-end.post.oldest-post', compact('posts'));
    }

    public function popularPost()
    {
    	
    	$posts = Post::where('status', 1)
    				 ->where('approval_status', 1)
    				 ->withCount('comments')
    				 ->withCount('favourite_to_users')
    				 ->orderBy('comments_count', 'desc')
    				 ->orderBy('favourite_to_users_count', 'desc')
    				 ->orderBy('view_count', 'desc')
    				 ->paginate(4);

    	return view('front-end.post.popular-post', compact('posts'));
    }



}

