@extends('layouts.app')

@section('content')
    <h1>Apply Now</h1>
    <div class="apply_job">
        <!-- Success message -->

        <form action="" method="post" action="{{ route('applyjob.store') }}" enctype="multipart/form-data">

            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" id="phone">
            </div>

            <div class="form-group">
                <label>Job Position</label>
                <input type="text" class="form-control" name="position" id="position" value="{{$job->jobTitle}}">
            </div>

            <div class="form-group">
                <div class="custom-file">
                    <input type="file" name="resume" class="custom-file-input" id="chooseFile">
                    <label class="custom-file-label" for="chooseFile">Upload Resume</label>
                </div>
            </div>

            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
    </div>
@endsection