<?php

namespace App\Http\Controllers;

use App\Comment;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class commentController extends Controller
{
    public function commentPost(Request $request)
    {
    	$comment = new Comment();

    	$request->validate([
    		'comment' => 'required|max:500',
    	]);

    	$comment->comment = $request->comment;
    	$comment->user_id = Auth::id();
    	$comment->post_id = $request->post_id;
    	$comment->save();

    	Toastr::success('Your comment posted successfully..', 'Success');

    	return redirect()->back();
    }
}
