@extends('admin.layout')
@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
    <table id="example1" class="table table-bordered table-striped">
    <tbody>
        <tr>
            <td></td>
            <th scope="col">Header</th>
            <th scope="col">Interview result</th>
            <th scope="col">Interview feedback</th>
            <th scope="col">User Id</th>
            <th></th>
          </tr>
    @foreach($data as $d)
    <tr>
        <td>{{$loop->iteration}}</td>
                  <td>{{$d->header}}</td>
                  <td>{{$d->bodyresult}}</td>
                  <td>{{$d->bodyfeedback}}</td>
                  <td>{{$d->userid }}</td>
                  <td><a href="{{route('sendemail',['uid'=>$d->userid,'head'=>$d->header ,'body'=>$d-> bodyresult])}}">Send Email</a></td>
    </tr>
    @method('PATCH')
    @endforeach
</tbody>
</table>
    
</div>  

</div>  
</div>         
    @endsection