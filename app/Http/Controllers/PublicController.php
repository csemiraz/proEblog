<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Category;

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

        //Post view Count
        $post_key = 'post_' . $post->id;
        if(!Session::has($post_key)) {
            $post->increment('view_count');
            Session::put($post_key, 1);
        }

        $comments = Comment::latest()->where('post_id', $id)->get();
        $randomPosts = Post::where('status', 1)->where('approval_status', 1)->take(2)->inRandomOrder()->get();

        return view('front-end.singlePost.singlePost', [
            'post'=>$post,
            'comments' => $comments,
            'randomPosts' => $randomPosts,
        ]);
    }

    public function categoryPost($id)
    {
        $categoryName = Category::find($id);
        $categoryPosts = Post::latest()->where('category_id', $id)->where('status', 1)->where('approval_status', 1)->paginate(4);
        return view('front-end.post.category-post', [
            'categoryPosts' => $categoryPosts,
            'categoryName' => $categoryName,
        ]);
    }


   

    


}
