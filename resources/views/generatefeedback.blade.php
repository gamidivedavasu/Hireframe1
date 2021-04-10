@extends('layouts.app')
@section('content')
    <h1>Select</h1>
    Generate feedback
    {{  $templatedata->templatename }}
    <br>
    Hello Applicant name
    <br>
    (Template section 1) This is regarding your application for the "Job role" position
    <br>
    (Template section 2) "based on interview feedback" We are glad to inform you about your selection/ We have considered other candidates.
    <br>
    (Template section 3) Here is the feedback for you.
    <br>
    Kind regards,
    HappyTech
@endsection