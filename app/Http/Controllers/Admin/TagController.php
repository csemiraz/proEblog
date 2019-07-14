<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tag;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class TagController extends Controller
{
	public function manageTag()
	{
		$tags = Tag::latest()->get();
		return view('back-end.admin.tag.manage-tag', ['tags'=>$tags]);
	}

    public function addTag()
    {
    	return view('back-end.admin.tag.add-tag');
    }

    public function storeTag(Request $request)
    {
    	$request->validate([
    		'name' => 'required|min:3|max:20',
    		'status' => 'required'
    	]);
    	$tag = new Tag();
    	$tag->name = $request->name;
    	$tag->slug = str_slug($request->name);
    	$tag->status = $request->status;
    	$tag->save();

    	Toastr::success('Tag info saved successfully', 'Success');

    	return redirect()->back();
    }

    public function editTag($id)
    {
    	$tag = Tag::find($id);
    	return view('back-end.admin.tag.edit-tag', ['tag'=>$tag]);
    }

    public function updateTag(Request $request)
    {
    	$request->validate([
    		'name' => 'required',
    		'status' => 'required',
    	]);

    	$tag = Tag::find($request->tag_id);

    	$tag->name = $request->name;
    	$tag->status = $request->status;
    	$tag->save();

    	Toastr::success('Tag info updated successfully...', 'Success');
    	return redirect()->route('manage-tag');
    }

    public function publishTag($id)
    {
    	$tag = Tag::find($id);

    	$tag->status = 1;
    	$tag->save();

    	Toastr::success('Tag info published successfully...', 'Success');
    	return redirect()->back();
    }

     public function unpublishTag($id)
    {
    	$tag = Tag::find($id);

    	$tag->status = 0;
    	$tag->save();

    	Toastr::success('Tag info unpublished successfully...', 'Success');
    	return redirect()->back();
    }

    public function deleteTag($id)
    {
    	$tag = Tag::find($id);
    	$tag->delete();

    	Toastr::success('Tag info deleted successfully...', 'Success');
    	return redirect()->back();
    }

}
