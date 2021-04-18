@extends('layouts.app')
@section('content')
    <table id="example1" class="table table-bordered table-striped">
    <tbody>
    @foreach($data as $d)
    <tr>
        <td>{{$loop->iteration}}</td>
                  <td>{{$d->header}}</td>
                  <td>{{$d->bodyresult}}</td>
                  <td>{{$d->bodyfeedback}}</td>
                  <td>{{$d->userid }}</td>
                  
    </tr>
    @method('PATCH')
    @endforeach
</tbody>
</table>
              
    @endsection