<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <div class="card">
            <p>{{$productCategory->name}}</p>
            <p>{{$productCategory->description}}</p>
        </div>
        <a href="{{$productCategory->slug}}/edit">Edit</a>
</body>
</html>