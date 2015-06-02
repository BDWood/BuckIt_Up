<h1>All Items</h1>

<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
    </tr>

    @foreach($items as $item)
    <tr>
        <td><a href="item/{{ $item->id }}">{{ $item->name }}</a></td>
        <td>{{ $item->description }}</td>
        <td><a href="item/{{$item->id}}/edit">Edit</a></td>
        <td><a href="item/{{$item->id}}/delete">Delete</a></td>
    </tr>
    @endforeach

</table>