@extends('layout')

@section('content')	
	<div class="internal-content">
        <h1>{{$item->name}}</h1>
        <div>
			<div><span>Description: </span><span>{{ $item->description }}</span></div>
			<div><a href="{{ URL::to('item') }}/{{ $item->id }}/edit">Edit</a></div>
        </div>  
    </div>
@endsection
