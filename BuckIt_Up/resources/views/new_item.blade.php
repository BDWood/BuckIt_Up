@extends('layout')

@section('content')
    <div class="internal-content">
        <h1>Make a New Item</h1>

        @if($errors->count() > 0)
        <div class="errors">
            @foreach($errors->all() as $error)
            <div>{{ $error }}</div>
            @endforeach
        </div>
        @endif

        <form action="{{ URL::to('new_item') }}" method="POST">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div><span>Name: </span><input class="textbox" type="text" name="name" value="{{ old('name') }}"></div>
            <div><span>Description: </span><input class="textbox" type="text" name="description" value="{{ old('description') }}"></div>
            <div><button>Save</button></div>
        </form>
    </div>
@endsection