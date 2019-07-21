@extends('back-end.master')
@section('title', 'Settings : Profile')

@section('mainContent')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false">Password</a>
				  </li>
				</ul>
			</div>
		</div>
	</div>

	<br><br>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="tab-content" id="myTabContent">
				  <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="card">
						<div class="card-body">
							<form action="{{ route('author.update-profile') }}" method="post" enctype="multipart/form-data">
								@csrf	
								<div class="form-group row">
									<label class="col-form-label col-md-3">Name</label>
									<div class="col-md-9">
										<input type="text" name="name" class="form-control" value="{{ $user->name }}">
										<input type="hidden" name="user_id" value="{{ Auth::user()->id }}" class="form-control">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-3">Email</label>
									<div class="col-md-9">
										<input type="email" name="email" class="form-control" value="{{ $user->email }}">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-3">About</label>
									<div class="col-md-9">
										<textarea name="about" class="form-control">{{ $user->about }}</textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label col-md-3">Image</label>
									<div class="col-md-9">
										<input type="file" name="image" class="form-control-file">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-9 offset-md-3">
										<input type="submit" class="btn btn-success btn-block" value="Update Profile">
									</div>
								</div>
							</form>
						</div>
					</div>
				  </div>
				  <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
				  	<div class="card">
						<div class="card-body">
							<form action="{{ route('author.change-password') }}" method="post">
								@csrf	
								<div class="form-group row">
									<label class="col-form-label col-md-3">Old Password</label>
									<div class="col-md-9">
										<input type="password" name="old_password" class="form-control">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-3">New Password</label>
									<div class="col-md-9">
										<input type="password" name="password" class="form-control">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-3">Confirm Password</label>
									<div class="col-md-9">
										<input type="password" name="password_confirmation" class="form-control" >
									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-9 offset-md-3">
										<input type="submit" class="btn btn-success btn-block" value="Change Password">
									</div>
								</div>
							</form>
						</div>
					</div>
				  </div>
				</div>
			</div>
		</div>
	</div>

	<br>


@endsection