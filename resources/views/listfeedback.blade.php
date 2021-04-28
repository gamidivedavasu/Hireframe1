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
            <td></td>
            <th scope="col">Header</th>
            <th scope="col">Interview result</th>
            <th scope="col">Interview feedback</th>
            <th scope="col">User Id</th>
            <th scope="col">Email</th>
            
          </tr>
    @foreach($data as $d)
    <form method="post" action="{{route('sendbulkmail',['head'=>$d->header,'bodyresult'=>$d->bodyresult])}}">
	@csrf
    <tr>
    <td><input type="checkbox" name="result[]" value="{{$d->userid }}"></td>
    
        <td>{{$loop->iteration}}</td>
                  <td>{{$d->header}}</td>
                  <td>{{$d->bodyresult}}</td>
                  <td>{{$d->bodyfeedback}}</td>
                  <td>{{$d->userid }}</td>
                  <td><a href="{{route('sendemail',['uid'=>$d->userid,'head'=>$d->header ,'body'=>$d-> bodyresult])}}">Send Email</a></td>
    </tr>
    
    @endforeach
</tbody>
</table>
<input type="submit" value="Submit">
</form>
    
</div>  

</div>  
</div>         
    @endsection