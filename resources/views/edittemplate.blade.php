@extends('layouts.app')
@section('content')
    <form action="{{ route('updatetemplate',$data->id) }}" method="POST" enctype = 'multipart/form-data'>
        @csrf
        Template name: {{ $data->templatename }}
        <br>

<!--        How many sections do you need in the template?
        <input type="number" name="sectioncount" id="sectioncountid" min="1" max="5">
        <br>
-->        
        What is the title for section 1?
        <input type="text" name="section1" value="{{$data->section1}}">
        <br>
        Enter the contents for section 1
        <input type="text" name="section1body" value="{{$data->section1body}}">
        <br>
        What is the title for section 2?
        <input type="text" name="section2" value="{{$data->section2}}">
        <br>
        Enter the contents for section 2
        <input type="text" name="section2body" value="{{$data->section2body}}">
        <br>
        What is the title for section 3?
        <input type="text" name="section3" value="{{$data->section3}}">
        <br>
        Enter the contents for section 3
        <input type="text" name="section3body" value="{{$data->section3body}}">
        <br>
        <button type="submit"> Update template</button>
    </form>
@endsection