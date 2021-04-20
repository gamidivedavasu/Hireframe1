@extends('admin.layout')
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
    <form action="{{ route('createtemplate') }}" method="POST">
        @csrf
        <h1> Create Template </h1> <br>
        Let's name your template:
        <input type="text" name="templatename" id="templateid"> 
        @error('templatename')
<div class="text-red-500 mt-2 text-sm">
    {{ $message }}
</div>
@enderror
        <br>

<!--        How many sections do you need in the template?
        <input type="number" name="sectioncount" id="sectioncountid" min="1" max="5">
        <br>
-->        

        What is the title for section 1?
        <input type="text" name="section1">
        @error('section1')
<div class="text-red-500 mt-2 text-sm">
    {{ $message }}
</div>
@enderror
        <br>
        Enter the contents for section 1
        <input type="text" name="section1body">
        @error('section1body')
<div class="text-red-500 mt-2 text-sm">
    {{ $message }}
</div>
@enderror
        <br>
        What is the title for section 2?
        <input type="text" name="section2">
        @error('section2')
<div class="text-red-500 mt-2 text-sm">
    {{ $message }}
</div>
@enderror
        <br>
        Enter the contents for section 2
        <input type="text" name="section2body">
        @error('section2body')
<div class="text-red-500 mt-2 text-sm">
    {{ $message }}
</div>
@enderror
        <br>
        What is the title for section 3?
        <input type="text" name="section3">
        @error('section3')
<div class="text-red-500 mt-2 text-sm">
    {{ $message }}
</div>
@enderror
        <br>
        Enter the contents for section 3
        <input type="text" name="section3body">
        @error('section3body')
<div class="text-red-500 mt-2 text-sm">
    {{ $message }}
</div>
@enderror
        <br>
        <button type="submit"> Create template</button>
    </form>
</div>
</div>
</div>
@endsection