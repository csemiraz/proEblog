<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class PostController extends Controller
{
    public function managePost()
    {
    	$posts = Post::latest()->get();
    	return view('back-end.admin.post.manage-post', compact('posts'));
    }

    public function addPost()
    {
    	$categories = Category::all();
    	$tags = Tag::all();
    	return view('back-end.admin.post.add-post', [
    		'categories' => $categories,
    		'tags' => $tags,
    	]);
    }

    public function image($request)
    {
    	$image = $request->file('image');
    	$slug = str_slug($request->title);

    	if(isset($image)) {
    		$imageExtension = $image->getClientOriginalExtension();
    		$currentDate = Carbon::now()->toDateString();
    		$imageName = $slug.'_'.$currentDate.'.'.$imageExtension;

    		$imagePath = 'assets/images/post/';
    		if(!file_exists($imagePath)){
    			mkdir($imagePath, 666, true);
    		}

    		Image::make($image)->resize(800,500)->save($imagePath.$imageName);
    	}
    	return $imageName;
    }

    public function storePost(Request $request)
    {
    	$request->validate([
    		'category_id' => 'required',
    		'tags' => 'required',
    		'title' => 'required',
    		'description' => 'required',
    		'image' => 'required|image',
    		'status' => 'required',
    	]);

    	$post = new Post();
    	$imageName = $this->image($request);

    	$post->user_id = Auth::id();
    	$post->category_id = $request->category_id;
    	$post->title = $request->title;
    	$post->slug = str_slug($request->title, '-');
    	$post->description = $request->description;
    	$post->image = $imageName;
    	$post->status = $request->status;

    	if(Auth::id() == 1){
    		$post->approval_status = 1;
    	}
    	else {
    		$post->approval_status = 0;
    	}

    	$post->save();

    	$post->tags()->attach($request->tags);

    	Toastr::success('Post info saved successfully', 'Success');

    	return redirect()->back();
    }

    public function editPost($id)
    {
    	$categories = Category::all();
    	$tags = Tag::all();
    	$post = Post::find($id);
    	return view('back-end.admin.post.edit-post', [
    		'categories' => $categories,
    		'tags' => $tags,
    		'post' => $post,
    	]);
    }

    public function imageUpdate($request)
    {
    	$post = Post::find($request->post_id);

    	$image = $request->file('image');
    	$slug = str_slug($request->title, '-');

    	if(isset($image)) {
    		$imageExtension = $image->getClientOriginalExtension();
    		$currentDate = Carbon::now()->toDateString();
    		$imageName = $slug.'_'.$currentDate.'.'.$imageExtension;

    		$imagePath = 'assets/images/post/';
    		if(!file_exists($imagePath)){
    			mkdir($imagePath, 666, true);
    		}

    		Image::make($image)->resize(800,500)->save($imagePath.$imageName);
    	}
    	else{
    		$imageName = $post->image;
    	}
    	return $imageName;
    }

    public function updatePost(Request $request)
    {
    	$request->validate([
    		'category_id' => 'required',
    		'tags' => 'required',
    		'title' => 'required',
    		'description' => 'required',
    		'image' => 'image',
    		'status' => 'required',
    	]);

    	$post = Post::find($request->post_id);
    	$imageName = $this->imageUpdate($request);

    	$post->user_id = Auth::id();
    	$post->category_id = $request->category_id;
    	$post->title = $request->title;
    	$post->slug = str_slug($request->title, '-');
    	$post->description = $request->description;
    	
    	if(file_exists($post->image!=$imageName && 'assets/images/post/'.$post->image)){
    		unlink(('assets/images/post/'.$post->image));
    	}

    	$post->image = $imageName;
    	$post->status = $request->status;

    	if(Auth::id()==1){
    		$post->approval_status=1;
    	}
    	else{
    		$post->approval_status=0;
    	}

    	$post->save();

    	$post->tags()->sync($request->tags);

    	Toastr::success('Post info updated successfully..', 'Success');
    	return redirect()->route('manage-post');

    }

    public function publishPost($id)
    {
    	$post = Post::find($id);

    	$post->status = 1;
    	$post->save();

    	Toastr::success('Post info published successfully...', 'Success');
    	return redirect()->back();
    }

    public function unPublishPost($id)
    {
    	$post = Post::find($id);

    	$post->status = 0;
    	$post->save();

    	Toastr::success('Post info unpublished successfully...', 'Success');
    	return redirect()->back();
    }

    public function deletePost($id)
    {
    	$post = Post::find($id);

    	if(file_exists('assets/images/post/'.$post->image)){
    		unlink(('assets/images/post/'.$post->image));
    	}

    	$post->delete();

        

    	Toastr::success('Post info deleted successfully...', 'Success');
    	return redirect()->back();
    }

    public function detailsPost ($id)
    {
    	$post = Post::find($id);
    	return view('back-end.admin.post.details-post',[
    		'post' => $post,
    	]);
    }

    public function approvePost($id)
    {
    	$post = Post::find($id);
    	$post->approval_status = true;
    	$post->save();

    	Toastr::success('Post approved successfully...', 'Success');
    	return redirect()->back();
    }



}
