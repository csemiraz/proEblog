@extends('back-end.master')
@section('title', 'Post : Manage')

@section('mainContent')
	<div class="row">
		<div class="col-md-12">
			<p><a class="btn btn-success" href="{{ route('add-post') }}">Add Post</a></p>
			<p class="badge badge-info">Total Posts : {{ $posts->count() }}</p>
			<p class="text-center text-info">Manage Post Information</p>
			<table class="table" id="myTable">
				<thead>
					<tr>
						<th>SL</th>
						<th>Author</th>
						<th>Title</th>
						<th>Description</th>
						<th>Status</th>
						<th>Approval Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($posts as $key=>$post)
					<tr>
						<td>{{ $key+1 }}</td>
						<td>{{ $post->user->name }}</td>
						<td>{{ $post->title }}</td>
						<td>{!! str_limit($post->description, 20) !!}</td>
						 <td>{{ $post->status == 1 ? 'Published' : 'Unpublished'}}</td>
                        <td>
                            @if($post->approval_status == true)
                            <span class="badge badge-success">Approved</span>
                            @else
                            <span class="badge badge-warning">Pending</span>
                            @endif
                        </td>
                        <td>
                           <a href="{{ route('details-post', ['id'=>$post->id]) }}" class=" badge badge-secondary" title="View"><i class="fas fa-eye"></i> </a>
                           @if($post->status == 1)
                            <a href="{{ route('unpublish-post', ['id'=>$post->id]) }}" class=" badge badge-success" title="Unpublish"><i class="fas fa-arrow-up"></i> </a>
                           @else
                            <a href="{{ route('publish-post', ['id'=>$post->id]) }}" class=" badge badge-warning" title="Publish"><i class="fas fa-arrow-down"></i> </a>
                           @endif
                            <a href="{{ route('edit-post', ['id'=>$post->id]) }}" class=" badge badge-info" title="Edit"><i class="fas fa-edit"></i> </a>
                            <a href="#" class="badge badge-danger" title="Delete" onclick="deleteData({{ $post->id }})"><i class="fas fa-trash-alt"></i> </a>

                            <form id="delete-data-{{ $post->id }}" action="{{ route('delete-post', ['id'=>$post->id]) }}" method="POST" style="display:none; ">
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