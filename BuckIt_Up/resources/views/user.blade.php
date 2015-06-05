@extends('layout')

@section('content')	
	<div class="internal-content">
        <h1>User</h1>
        <h3>Welcome {{ $user->username }}!!</h3>
        <div>
            <p> 
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Delectus eos cumque sit in quibusdam, obcaecati nihil magni ex. 
            Omnis odio quia cum eaque ipsam magni natus quibusdam ratione temporibus quod!
            </p>
        </div>  
        <div><a href="user/delete">Delete</a> Your User Profile</div>
    </div>
@endsection