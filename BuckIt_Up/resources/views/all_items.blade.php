@extends('layout')

@section('content') 
    <div class="internal-content">
        <h1>All Items</h1>  
        <div>
            <table>
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
                
            </table>
        </div>
        <div><a href="new_item">Add A New Item</a></div>  
    </div>
@endsection