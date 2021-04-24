<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback</title>
    <style>
        #feed{
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        #feed td,#feed th{
            border: 1px solid #ddd;
            padding: 8px;
        }
        #feed th{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            backgroung-color: #4CAF50;

        }
    </style>
</head>
<body>
    <table id="feed">
        <thead>
            <tr>
                <th>id</th>
                <th>header</th>
                <th>bodyresult</th>
                <th>bodyfeedback</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($feedback as $feed)
                <tr>
                    <td>{{$feed->id}}</td>
                    <td>{{$feed->header}}</td>
                    <td>{{$feed->bodyresult}}</td>
                    <td>{{$feed->bodyfeedback}}</td>
                    <td>{{$feed->created_at}}</td>
                    <td>{{$feed->updated_at}}</td>
                </tr>

            @endforeach
        </tbody>
    </table>
</body>
</html>
