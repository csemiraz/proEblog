<?php

namespace App\Http\Controllers\User;

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
    	$total_comments = $user->comments()->count();
    	$favourite_posts = $user->favourite_posts()->get();
    	$total_favourite_posts = $user->favourite_posts->count();



    	return view('back-end.user.home.dashboard', [
    		'total_comments' => $total_comments,
    		'favourite_posts' => $favourite_posts,
    		'total_favourite_posts' => $total_favourite_posts,
    	]);
    }

}
