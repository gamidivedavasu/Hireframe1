@extends('layouts.app')

@section('content')
    <h1>Current Openings</h1>
    <div class="jobs_list">
        @if(count($jobs) > 0)
            
            @foreach($jobs as $job)
                <div class="card ">
                    <h3><a href="/jobs/{{ $job->id}}"> {{$job->jobTitle}} </a></h3>
                    <p>Category: {{ $job->jobReference}}</p>
                    <p class="job_desc">Description: {{ $job->jobDescription}}</p>
                </div>
            @endforeach
            {{ $jobs->links() }}
        @else
            <p>No jobs found</p>
        @endif
    </div>
@endsection