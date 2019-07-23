<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Comment;
use App\Http\Controllers\Controller;
use App\Post;
use App\Subscriber;
use App\Tag;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    	$posts = Post::all()->count();
    	$all_category = Category::all()->count();
    	$all_tag = Tag::all()->count();
    	$all_author = User::where('role_id', 2)->count();
    	$all_user = User::where('role_id', 3)->count();
    	$all_subscriber = Subscriber::all()->count();
    	$total_pending_post = Post::where('approval_status', 0)->count();
    	$total_view = Post::sum('view_count');
    	$total_comments = Comment::all()->count();

    	$new_authors_today = User::where('role_id', 2)
								 ->whereDate('created_at', Carbon::today())
								 ->count();

    	$new_users_today = User::where('role_id', 3)
    									 ->whereDate('created_at', Carbon::today())
    									 ->count();

    	$popular_posts = Post::withCount('comments')
    						 ->withCount('favourite_to_users')
    						 ->orderBy('comments_count', 'desc')
    						 ->orderBy('favourite_to_users_count', 'desc')
    						 ->orderBy('view_count', 'desc')
    						 ->take(10)
    						 ->get();


 		$active_authors = User::where('role_id', 2)
 							  ->withCount('posts')
 							  ->withCount('comments')
 							  ->withCount('favourite_posts')
 							  ->orderBy('posts_count', 'desc')
 							  ->orderBy('comments_count', 'desc')
 							  ->orderBy('favourite_posts_count', 'desc')
 							  ->take(10)
 							  ->get();

		$active_users = User::where('role_id', 3)
 							  ->withCount('comments')
 							  ->withCount('favourite_posts')
 							  ->orderBy('comments_count', 'desc')
 							  ->orderBy('favourite_posts_count', 'desc')
 							  ->take(10)
 							  ->get();								 


    	return view('back-end.admin.home.dashboard', [
    		'posts' => $posts,
    		'total_pending_post' => $total_pending_post,
    		'all_category' => $all_category,
    		'all_tag' => $all_tag,
    		'all_author' => $all_author,
    		'all_user' => $all_user,
    		'all_subscriber' => $all_subscriber,
    		'total_view' => $total_view,
    		'total_comments' => $total_comments,
    		'new_authors_today' => $new_authors_today,
    		'new_users_today' => $new_users_today,
    		'popular_posts' => $popular_posts,
    		'active_authors' => $active_authors,
    		'active_users' => $active_users,
    	]);
    }

    public function deleteActiveAuthor ($id)
    {
    	$author = User::findOrFail($id);

    	$author->delete();

    	Toastr::success('Author has been deleted successfully.', 'Success');
    	return redirect()->back();
    }

     public function deleteActiveUser ($id)
	    {
	    	$author = User::findOrFail($id);

	    	$author->delete();

	    	Toastr::success('Author has been deleted successfully.', 'Success');
	    	return redirect()->back();
	    } 

	public function deletePopularPost ($id)
	    {
	    	$post = Post::find($id);

	    	$post->delete();

	    	Toastr::success('Popular post has been deleted successfully.', 'Success');
	    	return redirect()->back();
	    }

}
