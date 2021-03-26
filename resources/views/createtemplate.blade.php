<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('routeforcreatetemplate') }}" method="POST">
        @csrf
        Let's name your template:
        <input type="text" name="templatename" id="templateid"> 
        <br>

<!--        How many sections do you need in the template?
        <input type="number" name="sectioncount" id="sectioncountid" min="1" max="5">
        <br>
-->        
        What is the title for section 1?
        <input type="text" name="section1">
        <br>
        Enter the contents for section 1
        <input type="text" name="section1body">
        <br>
        What is the title for section 2?
        <input type="text" name="section2">
        <br>
        Enter the contents for section 2
        <input type="text" name="section2body">
        <br>
        What is the title for section 3?
        <input type="text" name="section3">
        <br>
        Enter the contents for section 3
        <input type="text" name="section3body">
        <br>
        <button type="submit"> Create template</button>
    </form>
</body>
</html>