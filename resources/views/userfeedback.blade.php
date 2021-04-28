@extends('layouts.app')
@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
	<table id="example1" class="mt-5 table table-bordered table-striped">
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Header</th>
        <th>Result</th>
        <th>Feedback</th>
      </tr>
    </thead>
    <tbody>
    @foreach($data as $d)
	
    <tr>
        
        <td>{{$loop->iteration}}</td>
                  <td>{{$d->header}}</td>
                  <td>{{$d->bodyresult}}</td>
                  <td>{{$d->bodyfeedback}}</td>
               
                
    </tr>
    
    @endforeach
</tbody>
</table>
  
</div>  

</div>  
</div>  
@endsection