@extends('form')

@section('content')
	<div class="form-content">		
		<div class="panel-body panel-default">
			<h1>Register</h1>
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

			<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="left-form">	
					<div class="form-group">
						<label class="col-md-4 control-label">Username</label>
						<div class="col-md-6">
							<input type="text" class="textbox" name="username" value="{{ old('username') }}">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label">First Name</label>
						<div class="col-md-6">
							<input type="text" class="textbox" name="first_name" value="{{ old('first_name') }}">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label">Last Name</label>
						<div class="col-md-6">
							<input type="text" class="textbox" name="last_name" value="{{ old('last_name') }}">
						</div>
					</div>
				</div>	
				<div class="right-form">
					<div class="form-group">
						<label class="col-md-4 control-label">E-Mail Address</label>
						<div class="col-md-6">
							<input type="email" class="textbox" name="email" value="{{ old('email') }}">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label">Password</label>
						<div class="col-md-6">
							<input type="password" class="textbox" name="password">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label">Confirm Password</label>
						<div class="col-md-6">
							<input type="password" class="textbox" name="password_confirmation">
						</div>
					</div>
				</div>
				<div class="register">
					<div class="col-md-6 col-md-offset-4">
						<button type="submit" class="btn btn-primary">
							Register
						</button>
					</div>
				</div>	
			</form>
		</div>
	</div>
@endsection
