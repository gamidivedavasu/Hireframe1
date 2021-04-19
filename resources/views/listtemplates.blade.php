@extends('admin.layout')
@section('content')
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
    <table id="example1" class="table table-bordered table-striped">
    <tbody>
    @foreach($data as $d)
    <tr>
        <td>{{$loop->iteration}}</td>
                  <td>{{$d->templatename}}</td>
                  <td>{{$d->section1}}</td>
                  <td>{{$d->section1body}}</td>
                  <td>{{$d->section2}}</td>
                  <td>{{$d->section2body}}</td>
                  <td>{{$d->section3}}</td>
                  <td>{{$d->section3body}}</td>
                  <td><a href="{{route('generatefeedback',$d->id)}}">Select Template to Generate Feedback</a></td>
                  <td><a href="{{route('edittemplate',$d->id)}}">Edit Template</a></td>
                  <td><a href="{{route('deletetemplate',$d->id)}}">Delete Template</a></td>
    </tr>
    @method('PATCH')
    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      
              @endsection       