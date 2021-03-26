<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table id="example1" class="table table-bordered table-striped">
    <tbody>
    @foreach($data as $d)
    <tr>
        <td>{{$loop->iteration}}</td>
                  <td>{{$d->templatename}}</td>
                  <td>{{$d->section1}}</td>
                  <td>{{$d->section1body}}</td>
    </tr>
    @endforeach
                </tbody>
              </table>
</body>
</html>