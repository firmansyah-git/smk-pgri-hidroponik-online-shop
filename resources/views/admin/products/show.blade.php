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
            <p>{{$product->name}}</p>
            <p>{{$product->description}}</p>
            <p>{{$product->price}}</p>
            <p>{{$product->weight}}</p>
            <p>{{$product->stock}}</p>
            <p>{{$product->min_stock}}</p>
            <p>{{$product->is_active}}</p>
            <p>{{$product->productCategory->name}}</p>
        </div>
        <a href="{{$product->slug}}/edit">Edit</a>
</body>
</html>