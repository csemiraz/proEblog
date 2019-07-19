<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    public function favouritePost($id)
    {
    	$user = Auth::user();

    	$isFavourite = $user->favourite_posts()->where('post_id', $id)->count();

    	if($isFavourite == 0) {
    		$user->favourite_posts()->attach($id);

    		Toastr::success('Added this post to your favourite list.', 'Success');
    		return redirect()->back();
    	}

    	else {
    		$user->favourite_posts()->detach($id);

    		Toastr::success('Remove this post from your favourite list.', 'Success');
    		return redirect()->back();
    	}
    }
}
