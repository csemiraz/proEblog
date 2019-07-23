<?php

namespace App\Http\Controllers\Author;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
    	$user = Auth::user();
    	$posts = $user->posts;
    	$total_pending_post = $posts->where('approval_status', 0)->count();
    	$total_view = $posts->sum('view_count');
    	//$total_comments = ?

        $popular_posts = $user->posts()
							 ->withCount('comments')
    						 ->withCount('favourite_to_users')
    						 ->orderBy('comments_count', 'desc')
    						 ->orderBy('favourite_to_users_count', 'desc')
    						 ->orderBy('view_count', 'desc')
    						 ->take(10)
    						 ->get();


    	return view('back-end.author.home.dashboard', [
    		'posts' => $posts,
    		'total_pending_post' => $total_pending_post,
    		//'total_comments' => $total_comments,
    		'total_view' => $total_view,
    		'popular_posts' => $popular_posts,
    	]);
    }


	public function deletePopularPost ($id)
	    {
	    	$post = Post::find($id);

	    	$post->delete();

	    	Toastr::success('Popular post has been deleted successfully.', 'Success');
	    	return redirect()->back();
	    }

}
