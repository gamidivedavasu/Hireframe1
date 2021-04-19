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
                  <td>{{$d->header}}</td>
                  <td>{{$d->bodyresult}}</td>
                  <td>{{$d->bodyfeedback}}</td>
                  <td>{{$d->userid }}</td>
                  <td><a href="{{route('editfeedback',$d->id)}}">Edit Feedback</a></td>
                  <td><a href="{{route('sendemail',['uid'=>$d->userid,'head'=>$d->header])}}">Email</a></td>
    </tr>
    @method('PATCH')
    @endforeach
</tbody>
</table>
    
</div>  

</div>  
</div>         
    @endsection