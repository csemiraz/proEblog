@extends('back-end.master');
@section('title', 'Category : Manage')

@section('mainContent')
	<div class="row">
		<div class="col-md-12">
			<a href="{{ route('add-category') }}" class="btn btn-success">Add Category</a>
			<hr/>
			<div class="card">
				<div class="card-header text-center">
					<p>Manage category information</p>
					<p class="text-success">{{ Session::get('message') }}</p>
				</div>
				<div class="card-body">
					<table id="myTable" class="table table-striped table-hover">
						<thead>
							<tr>
								<th>SL</th>
								<th>Name</th>
								<th>Image</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
							@foreach($categories as $key=>$category)
							<tr>
								<td>{{ $key+1 }}</td>
								<td>{{ $category->name }}</td>
								<td>
									@if($category->image != 'category.jpg')
									<img src="{{ asset('assets/images/category/thumb/'.$category->image) }}" alt="{{ $category->image }}" width="100px" height="80px">
									@else
									<img src="{{ asset('assets/images/category/category.jpg') }}" alt="{{ $category->image }}" width="100px" height="80px">
									@endif
								</td>
								<td>
									<span class="badge badge-success">{{ $category->status == 1 ? 'Published' : '' }}</span>
									<span class="badge badge-info">{{ $category->status == 0 ? 'Unpublished' : '' }}</span>

								</td>
								<td>
									@if($category->status==0)
									<a href="{{ route('publish-category', ['id'=>$category->id]) }}" class="badge badge-success">publish</a>
									@else
									<a href="{{ route('unpublish-category', ['id'=>$category->id]) }}" class="badge badge-warning">unpublish</a>
									@endif
									<a href="{{ route('edit-category', ['id'=>$category->id]) }}" class="badge badge-secondary">edit</a>
									<a href="" class="badge badge-danger" onclick="event.preventDefault(); document.getElementById('delete-data').submit();">delete</a>
									<form id="delete-data" action="{{ route('delete-category', ['id'=>$category->id]) }}" method="post" style="display: none;">
										@csrf
									</form>
								</td>
							</tr>
							@endforeach
						<tbody>
							
						</tbody>

					</table>
				</div>
			</div>
		</div>
	</div>
@endsection