@extends('layout')

@section('content') 
    <div class="internal-content">
        <h1>Edit Item</h1>
        <div>
            @if($errors->count() > 0)
                <div class="errors">
                    @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{ URL::to('item') }}/{{$item->id}}/edit" method="POST">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                <div><span>Name</span><br>
                <input class="textbox" type="text" name="name" value="{{ $item->name }}"></div>
                <div><span>Description</span><br>
                <input class="textbox" type="text" name="description" value="{{ $item->description }}"></div>
                <div><button type="submit">Save</button>
                <button type="reset">Cancel</button></div>
            </form>
        </div>  
    </div>
@endsection