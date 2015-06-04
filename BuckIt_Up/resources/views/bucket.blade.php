@extends('layout')

@section('content')	
	<div class="internal-content">
            <h1>Bucket</h1>
            <h3>Your Bucket</h3> <!-- optional -->
            <tr>
                    <th>Name</th>
                    <th>Description</th>
                </tr>

                @foreach($items as $item)
                <tr class="in-table">
                    <td><a href="item/{{ $item->id }}">{{ $item->name }}</a></td>
                    <td>{{ $item->description }}</td>
                    <td><a href="item/{{$item->id}}/edit">Edit</a></td>
                    <td><a href="item/{{$item->id}}/delete">Delete</a></td>
                </tr>
                @endforeach
    </div>
@endsection