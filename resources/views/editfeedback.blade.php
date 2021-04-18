@extends('layouts.app')
@section('content')
<form action="{{ route('editfeedback') }}" method="POST">
    @csrf
    <h1>
    Generate feedback
    </h1>
    Template name: {{ $data->templatename }}
    <br>
    Hello <select id= "selectuser" name ="selectuser" >
        <option value=" disabled selected">Please select user</option>        
    @foreach($usersdata as $user)
    <option value="{{$user->id}}">{{ $user->name }}</option>
    @endforeach
    <br>
    <br>
    <textarea id="header" name="header" >{{ $data->section1body }} "Job role" position</textarea>
    <br>
    <textarea id="body-result" name="body-result" > {{  $data->section2body }} </textarea>
    <br>
    <textarea id="body-feedback" name="body-feedback" > {{  $data->section3body }} </textarea>
    <br>
     
    <button type="submit"> Generate feedback</button>
</form>
@endsection