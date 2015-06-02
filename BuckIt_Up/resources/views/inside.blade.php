@extends('layout')

@section('content')
	<div class="header">	
		<header>
			<nav>
				<a class="logo" href="#">BuckIt Up</a>
				<a class="main" href="#">Make List</a>
				<a class="main" href="#">Find Ideas</a>
				<a class="main" href="#">About</a>	
				<a class="settings" href="#">Account</a>				
				<a class="logout" href="#">Logout</a>				
			</nav>
		</header>		
	</div>
	
	<div class="form-content">
		<div class="panel-body panel-default">
			<h1>Title</h1>
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
			<div class="internal-content">
				
			</div>	
		</div>
	</div>
@endsection
