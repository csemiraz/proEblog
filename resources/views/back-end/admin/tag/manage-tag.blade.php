@extends('back-end.master')
@section('title', 'Tag : Manage')

@section('mainContent')
	<div class="row">
		<div class="col-md-12">
			<p><a class="btn btn-success" href="{{ route('add-tag') }}">Add Tag</a></p>
			<p class="text-center text-info">Add Tag Information</p>
			<table class="table" id="myTable">
				<thead>
					<tr>
						<th>SL</th>
						<th>Name</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($tags as $key=>$tag)
					<tr>
						<td>{{ $key+1 }}</td>
						<td>{{ $tag->name }}</td>
						<td>{{ $tag->status==1 ? 'Published' : 'Unpublished' }}</td>
						<td>
							@if($tag->status==0)
							<a href="{{ route('publish-tag', ['id'=>$tag->id]) }}" class="badge badge-success">publish</a>
							@else
							<a href="{{ route('unpublish-tag', ['id'=>$tag->id]) }}" class="badge badge-warning">unpublish</a>
							@endif
							<a href="{{ route('edit-tag', ['id'=>$tag->id]) }}" class="badge badge-primary">edit</a>
							<a href="#" class="badge badge-danger" onclick="deleteData({{ $tag->id }})">delete</a>

							<form id="delete-data-{{ $tag->id }}" action="{{ route('delete-tag', ['id'=>$tag->id]) }}" method="post" style="display: none">
								@csrf
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection