@extends('back-end.master')
@section('title', 'Subscriber : Manage Subscriber')

@section('mainContent')
	<div class="row">
		<div class="col-md-12">
			<p class="badge badge-info">Total Subscribers : {{ $subscribers->count() }}</p>
			<p class="text-center text-info">Manage Subscriber</p>
			<table class="table" id="myTable">
				<thead>
					<tr>
						<th>SL</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($subscribers as $key=>$subscriber)
					<tr>
						<td>{{ $key+1 }}</td>
						<td>{{ $subscriber->email }}</td>

                        <td>
                            <a href="#" class="badge badge-danger" title="Delete" onclick="deleteData({{ $subscriber->id }})"><i class="fas fa-trash-alt"></i> </a>

                            <form id="delete-data-{{ $subscriber->id }}" action="{{ route('delete-subscriber', ['id'=>$subscriber->id]) }}" method="POST" style="display:none; ">
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