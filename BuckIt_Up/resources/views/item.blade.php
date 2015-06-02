@extends('layout')

@section('content')	
	<div class="internal-content">
        <h1>{{item}}</h1>
        <div>
            {{-- {{ print_r($item) }} --}}
			<h1>Item: {{ $item->id }}</h1>
			<div><span>Name:</span><span>{{ $item->name }}</span></div>
			<div><span>Description: </span><span>{{ $item->description }}</span></div>
			<div><a href="{{ URL::to('item') }}/{{ $item->id  }}/edit">Edit</a></div>
        </div>  
    </div>
@endsection
