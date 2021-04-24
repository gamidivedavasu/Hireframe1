@extends('admin.layout')
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
<form action="{{ route('editfeedback') }}" method="POST">
    @csrf
    <h1>
    Edit feedback
    </h1>
    <br>
    <textarea id="header" name="header" >{{ $data->header }} "Job role" position</textarea>
    <br>
    <textarea id="body-result" name="body-result" > {{  $data->bodyresult }} </textarea>
    <br>
    <textarea id="body-feedback" name="body-feedback" > {{  $data->bodyfeedback }} </textarea>
    <br>
     
    <button type="submit"> Update feedback</button>
</form>
        </div></div></div>
@endsection