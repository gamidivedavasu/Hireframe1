@extends('layouts.app')
@section('content')
    <form action="{{ route('edittemplate') }}" method="POST">
        @csrf
        Template name:
        <br>

<!--        How many sections do you need in the template?
        <input type="number" name="sectioncount" id="sectioncountid" min="1" max="5">
        <br>
-->        
        Enter the contents for section 1
        <input type="text" name="section1body" value="{{$data->section1}}">
        <br>
        What is the title for section 2?
        <input type="text" name="section2">
        <br>
        Enter the contents for section 2
        <input type="text" name="section2body">
        <br>
        What is the title for section 3?
        <input type="text" name="section3">
        <br>
        Enter the contents for section 3
        <input type="text" name="section3body">
        <br>
        <button type="submit"> Create template</button>
    </form>
@endsection