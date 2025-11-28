<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('product_categories.store') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div>
            <label for="name">Category name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description" value="{{ old('description') }}">
            @error('description')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="image">Foto tampilan</label>
            <input type="file" id="image" name="image">
            @error('image')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>