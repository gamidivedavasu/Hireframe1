@extends('layouts.app')

@section('content')
    <h1>{{$job->jobTitle}}</h1>

    <p>Category: {{ $job->jobReference}}</p>
    <p>Description: {{ $job->jobDescription}}</p>
    
    @if(Auth::user())
        @if(auth()->user('id')['id'] == $job->user_id)
            <a href="/jobs/edit/{{$job->id}}" class="btn btn-primary">Edit</a>

            <form action="{{route('jobs.destroy',[$job->id])}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>               
            </form>

        @endif
    @else
        <a href="/apply-now/{{$job->id}}" class="btn btn-primary">Apply Now</a>
    @endif
    
    
@endsection