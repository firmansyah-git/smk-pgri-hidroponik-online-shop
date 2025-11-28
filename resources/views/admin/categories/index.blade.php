<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($product_categories as $category)
        <div class="card">
            <p>{{$category->name}}</p>
            <p>{{$category->description}}</p>
            <a href="product_categories/{{ $category->slug }}">{{$category->name}}</a>
            <form action="product_categories/{{ $category->slug }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </div>
    @endforeach
    <button>
        <a href="product_categories/create">Tambah</a>
    </button>

</body>
</html>