<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SearchController extends Controller
{
    public function search(Request $request)
    {
    	$query = $request->input('query');

    	$posts = Post::where('title', 'LIKE', "%$query%")
    				 ->where('status', 1)
    				 ->where('approval_status', 1)
    				 ->paginate(4);	

    	return view('front-end.search.searchContent', compact('posts', 'query'));
    }
}
