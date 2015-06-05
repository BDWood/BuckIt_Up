@extends('layout')

@section('content') 
    <div class="internal-content">
        <h1>Create Bucket</h1>
        <h3>Get started on your list ...</h3>
        <div>
            <form>
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <h4>Bucket List Item 1:</h4>
                <div>Name: </div>
                <input type="text" name="title" class="textbox">            
                <div>Description: </div>
                <input type="text" name="description" class="textbox"> 
                <h4>Bucket List Item 2:</h4>
                <div>Name: </div>
                <input type="text" name="title" class="textbox">            
                <div>Description: </div>
                <input type="text" name="description" class="textbox"> 
                <h4>Bucket List Item 3:</h4>
                <div>Name: </div>
                <input type="text" name="title" class="textbox">            
                <div>Description: </div>
                <input type="text" name="description" class="textbox">
                <h4>Bucket List Item 4:</h4>
                <div>Name: </div>
                <input type="text" name="title" class="textbox">            
                <div>Description: </div>
                <input type="text" name="description" class="textbox">
                <h4>Bucket List Item 5:</h4>
                <div>Name: </div>
                <input type="text" name="title" class="textbox">            
                <div>Description: </div>
                <input type="text" name="description" class="textbox">
                <h4>Bucket List Item 6:</h4>
                <div>Name: </div>
                <input type="text" name="title" class="textbox">            
                <div>Description: </div>
                <input type="text" name="description" class="textbox">
                <h4>Bucket List Item 7:</h4>
                <div>Name: </div>
                <input type="text" name="title" class="textbox">            
                <div>Description: </div>
                <input type="text" name="description" class="textbox">
                <h4>Bucket List Item 8:</h4>
                <div>Name: </div>
                <input type="text" name="title" class="textbox">            
                <div>Description: </div>
                <input type="text" name="description" class="textbox">
                <h4>Bucket List Item 9:</h4>
                <div>Name: </div>
                <input type="text" name="title" class="textbox">            
                <div>Description: </div>
                <input type="text" name="description" class="textbox">
                <h4>Bucket List Item 10:</h4>
                <div>Name: </div>
                <input type="text" name="title" class="textbox">            
                <div>Description: </div>
                <input type="text" name="description" class="textbox">   
                <div><button>Save</button><button type="reset">Cancel</button></div>
            </form>
        </div>  
    </div>
@endsection