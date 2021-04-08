@extends('layouts.app')
@section('content')
    <table id="example1" class="table table-bordered table-striped">
    <tbody>
    @foreach($data as $d)
    <tr>
        <td>{{$loop->iteration}}</td>
                  <td>{{$d->templatename}}</td>
                  <td>{{$d->section1}}</td>
                  <td>{{$d->section1body}}</td>
                  <td><a href="{{route('generatefeedback',$d->id)}}">Select feedback</a></td>
    </tr>
    @endforeach
                </tbody>
              </table>
    @endsection