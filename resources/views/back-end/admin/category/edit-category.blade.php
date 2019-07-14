@extends('back-end.master')
@section('title', 'Category : Update')

@section('mainContent')
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header text-center">
					<p>Edit category information</p>
					<p class="text-success">{{ Session::get('message') }}</p>
				</div>
				<div class="card-body">
					<form action="{{ route('update-category') }}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group row">
							<label for="" class="col-form-label col-md-3">Category Name</label>
							<div class="col-md-9">
								<input type="text" name="name" class="form-control" value="{{ $category->name }}">
								<input type="hidden" name="category_id" value="{{ $category->id }}">
								<span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-form-label col-md-3">Image</label>
							<div class="col-md-9">
								<input type="file" name="image" class="form-control-file">
								<span class="text-danger">
									{{ $errors->has('image') ? $errors->first('image') : '' }}
								</span>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-form-label col-md-3">Status</label>
							<div class="col-md-9">
								<select name="status" class="form-control">
									<option value="">Select</option>
									<option value="1" {{ $category->status==1 ? 'selected' : '' }}>Publish</option>
									<option value="0" {{ $category->status==0 ? 'selected' : '' }}>UnPublish</option>
								</select>
								<span class="text-danger">
									{{ $errors->has('status') ? $errors->first('status') : '' }}
								</span>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-9 offset-md-3">
								<input type="submit" class="btn btn-success btn-block" value="Update Category">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection