@extends('layout')

@section('content') 
    <div class="internal-content">
        <h1>Create Bucket</h1>
        <h3>Get started on your list ...</h3>
        <div>
            <form>
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div>Bucket List Item 1:</div>
                Name:<br>
                <input type="text" name="title">
                <br>
                Description:<br>
                <input type="text" name="description"><br><br>
                <div>Bucket List Item 2:</div>
                Name:<br>
                <input type="text" name="title">
                <br>
                Description:<br>
                <input type="text" name="description"><br><br>
                <div>Bucket List Item 3:</div>
                Name:<br>
                <input type="text" name="title">
                <br>
                Description:<br>
                <input type="text" name="description"><br><br>
                <div>Bucket List Item 4:</div>
                Name:<br>
                <input type="text" name="title">
                <br>
                Description:<br>
                <input type="text" name="description"><br><br>
                <div>Bucket List Item 5:</div>
                Name:<br>
                <input type="text" name="title">
                <br>
                Description:<br>
                <input type="text" name="description"><br><br>
                <div>Bucket List Item 6:</div>
                Name:<br>
                <input type="text" name="title">
                <br>
                Description:<br>
                <input type="text" name="description"><br><br>
                <div>Bucket List Item 7:</div>
                Name:<br>
                <input type="text" name="title">
                <br>
                Description:<br>
                <input type="text" name="description"><br><br>
                <div>Bucket List Item 8:</div>
                Name:<br>
                <input type="text" name="title">
                <br>
                Description:<br>
                <input type="text" name="description"><br><br>
                <div>Bucket List Item 9:</div>
                Name:<br>
                <input type="text" name="title">
                <br>
                Description:<br>
                <input type="text" name="description"><br><br>
                <div>Bucket List Item 10:</div>
                Name:<br>
                <input type="text" name="title">
                <br>
                Description:<br>
                <input type="text" name="description"><br><br>
                <div><button>Save</button></div>
            </form>
        </div>  
    </div>
@endsection