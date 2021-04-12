@extends('layouts.app')
@section('content')
<form action="{{ route('storefeedback') }}" method="POST">
    @csrf
    <h1>
    Generate feedback
    </h1>
    Template name: {{  $templatedata->templatename }}
    <br>
    Hello <input type="">$applicant name
    <br>
    <textarea id="header" name="header" >{{ $templatedata->section1body }} "Job role" position</textarea>
    <br>
    <textarea id="body-result" name="body-result" > {{  $templatedata->section2body }} </textarea>
    <br>
    <textarea id="body-feedback" name="body-feedback" > {{  $templatedata->section3body }} </textarea>
    <br>
    <button type="submit"> Generate feedback</button>
</form>
@endsection