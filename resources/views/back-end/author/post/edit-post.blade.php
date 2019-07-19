@extends('back-end.master')
@section('title', 'Update : Post')

@section('mainContent')
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header text-center">
					Update post inforamtion
				</div>
				<div class="card-body">
					<form action="{{ route('author.update-post') }}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group row">
							<label class="col-from-label col-md-3">Category</label>
							<div class="col-md-9">
								<select name="category_id" class="form-control">
									<option value="">Select</option>
									@foreach($categories as $category)
									<option value="{{ $category->id }} " {{ $post->category_id==$category->id ? 'selected' : '' }}>{{ $category->name }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-from-label col-md-3">Tags</label>
							<div class="col-md-9">
								<select name="tags[]" class="form-control selectpicker" multiple>
									@foreach($tags as $tag)
									<option
										@foreach ($post->tags as $postTag)
											{{ $postTag->id == $tag->id ? 'selected' : '' }}
										@endforeach
									 value="{{ $tag->id }}">{{ $tag->name }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-form-label col-md-3">Title</label>
							<div class="col-md-9">
								<input type="text" name="title" class="form-control" value="{{ $post->title }}">
								<input type="hidden" name="post_id" class="form-control" value="{{ $post->id }}">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-form-label col-md-3">Description</label>
							<div class="col-md-9">
								<textarea id="" name="description" class="form-control">{{ $post->description }}</textarea>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-form-label col-md-3">Image</label>
							<div class="col-md-9">
								<input type="file" name="image" class="form-control-file">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-from-label col-md-3">Status</label>
							<div class="col-md-9">
								<select name="status" class="form-control">
									<option value="">Select</option>
									<option value="1" {{ $post->status==1 ? 'selected' : '' }}>Publish</option>
									<option value="0" {{ $post->status==0 ? 'selected' : '' }}>Unpublish</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-9 offset-md-3">
								<input type="submit" class="btn btn-success btn-block" value="Add Post">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection