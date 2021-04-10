<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

                        @if(session()->get('success'))
                       <div class="alert alert-success">
                       {{ session()->get('success') }}
                       </div>
                       @endif

<form action="{{route('addform')}}" method="Post">
       @csrf
<label><strong>Candidate Name</strong></label></strong></label>
    
                                <input type="text" name="n" class="form-control" value=""/>
                               
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
                                <label><strong>Description :</strong></label>
                                <textarea class="form-control" rows="4" cols="40" name="d" value="description"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success btn-sm">Save</button>
                            </div>

</form>

</body>
</html>