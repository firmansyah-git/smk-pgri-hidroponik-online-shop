<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div>
            <label for="name">Nama produk</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="description">Deskripsi</label>
            <input type="text" id="description" name="description" value="{{ old('description') }}">
            @error('description')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="price">Harga</label>
            <input type="text" id="price" name="price" value="{{ old('price') }}">
            @error('price')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="weight">Berat</label>
            <input type="text" id="weight" name="weight" value="{{ old('weight') }}">
            @error('weight')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="stock">Stok</label>
            <input type="text" id="stock" name="stock" value="{{ old('stock') }}">
            @error('stock')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="min_stock">Stok minimum</label>
            <input type="text" id="min_stock" name="min_stock" value="{{ old('min_stock') }}">
            @error('min_stock')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="is_active">Produk aktif</label>
            <input type="hidden" name="is_active" value="0">
            <input type="checkbox" id="is_active" name="is_active" value="1">
            @error('is_active')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="product_category_id">Kategori</label>
            <select name="product_category_id" id="product_category_id">
                <option value="">Pilih Kategori</option>
                @foreach ($product_categories as $product_category)
                    <option value="{{ $product_category->id }}">{{ $product_category->name }}</option>
                @endforeach
            </select>
            
            @error('product_category_id')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="image">Foto Produk</label>
            <input type="file" id="image" name="image">
            @error('image')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>