@extends('back-end.master')
@section('title', 'Edit : Tag')

@section('mainContent')
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header text-center">
					Update tag inforamtion
				</div>
				<div class="card-body">
					<form action="{{ route('update-tag') }}" method="post">
						@csrf
						<div class="form-group row">
							<label class="col-form-label col-md-3">Name</label>
							<div class="col-md-9">
								<input type="text" name="name" class="form-control" value="{{ $tag->name }}">
								<input type="hidden" name="tag_id" class="form-control" value="{{ $tag->id }}">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-from-label col-md-3">Status</label>
							<div class="col-md-9">
								<select name="status" class="form-control">
									<option value="">Select</option>
									<option value="1" {{ $tag->status==1 ? 'selected' : '' }}>Publish</option>
									<option value="0" {{ $tag->status==0 ? 'selected' : '' }}>Unpublish</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-9 offset-md-3">
								<input type="submit" class="btn btn-success btn-block" value="Update Tag">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection