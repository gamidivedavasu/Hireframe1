@extends('layouts.app')
@section('content')
<body>
                        @if(session()->get('success'))
                       <div class="alert alert-success">
                       {{ session()->get('success') }}
                       </div>
                       @endif

<form action="{{route('addform')}}" method="Post" class="form-group">
       @csrf


       <div class="form-group">
                              <label><strong>Candidate Name</strong></label></strong></label>
    
                              <select name="n" class="form-control">
                                  <option>Select User</option>
                                      @foreach($data as $x)
                                        <option>{{$x->name}}</option>
                                      @endforeach
                                </select>
                            </div> 
                            <div class="form-group">

                            <label><strong>Job Role</strong></label></strong></label>
    
                            <select name="j" class="form-control" id= "JobRole">
                                  <option >Select Role</option>
                                      @foreach($role as $y)
                                        <option  value="{{$y->id}}">{{$y->position}}</option>
                                      @endforeach
                                </select>
                               
                            </div> <br>

                            <div class="form-group">
                                <label><strong>TELEPHONIC INTERVIEW AND ONLINE INTERVIEW</b></label><br>
                                </strong></label><br>
                                <label><input type="checkbox" name="category[]" value="Communication"> Communication Skills</label>
                                <label><input type="checkbox" name="category[]" value="Gestures"> Gestures</label>
                                
                            </div>  <br>
                            <div class="form-group">
                                <label><strong>Technical Skills</b></label><br>
</strong></label><br>
                                <label><input type="checkbox" name="category[]" value="Communication">Coding</label>
                                <label><input type="checkbox" name="category[]" value="Gestures">Project Handling</label>
                                </strong></label><br>                          
                            </div>  </strong></label><br>

                            <div class="form-group">
                            <label class="radio-inline">
                               <input type="radio" id="option2"  value="selected" name="opt">Selected</label>
                         <label class="radio-inline">
                        <input type="radio" id="option2"  value="rejected"name="opt">rejected</label>
                           </div>
                            
                            <div class="form-group">
                                <label><strong>Description :</strong></label>
                                <textarea class="form-control" rows="4" cols="40" name="d" value="description"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success btn-sm">Save</button>
                            </div>

</form>

<script src="{{asset('jquery.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="n"]').on('change', function() {
            var formula_id = $(this).val();
            if(formula_id) {
                $.ajax({
                    // alert();
                    url: '../../getrole/'+formula_id,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('#JobRole').empty();
                        $('#JobRole').append('<option>JobRole</option>');
                        $.each(data, function(i, e){
                                $('#JobRole').append('<option value='+e.id+'>'+e.jobTitle+'</option>');
                            
                        }); 
                    }
                });
            }else{
                // alert("ye");
                // $('select[name="product_id"]').empty();
            }
        });
   });
</script>
</body>
@endsection