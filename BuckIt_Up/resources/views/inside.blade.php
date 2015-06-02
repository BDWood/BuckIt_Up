@extends('layout')

@section('content')	
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
