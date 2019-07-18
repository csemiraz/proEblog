<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PublicController extends Controller
{
    public function index()
    {
    	$posts = Post::latest()->where('status', 1)->where('approval_status', 1)->paginate(6);
        return view('front-end.home.homeContent', [
        	'posts' => $posts,
        ]);
    }

    public function singlePost($id)
    {
        $post = Post::find($id);
        $comments = Comment::latest()->where('post_id', $id)->get();
        return view('front-end.singlePost.singlePost', [
            'post'=>$post,
            'comments' => $comments,
        ]);
    }

   

    


}
