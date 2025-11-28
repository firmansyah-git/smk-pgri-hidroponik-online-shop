<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('products.update', $product->slug) }}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <div>
            <label for="name">Category name</label>
            <input type="text" id="name" name="name" value="{{ $product->name }}">
            @error('name')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description" value="{{ $product->description }}">
            @error('description')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="price">price</label>
            <input type="text" id="price" name="price" value="{{ $product->price }}">
            @error('price')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="weight">weight</label>
            <input type="text" id="weight" name="weight" value="{{ $product->weight }}">
            @error('weight')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="stock">stock</label>
            <input type="text" id="stock" name="stock" value="{{ $product->stock }}">
            @error('stock')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="min_stock">min_stock</label>
            <input type="text" id="min_stock" name="min_stock" value="{{ $product->min_stock }}">
            @error('min_stock')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="is_active">Produk aktif</label>
            <input type="hidden" name="is_active" value="0">
            <input type="checkbox" id="is_active" name="is_active" value="1"
                @if ( $product->is_active == 1 )
                    checked
                @endif
            >
            @error('is_active')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="product_category_id">Kategori</label>
            <select name="product_category_id" id="product_category_id">
                @foreach ($categories as $category)
                    @if ($category->id == $product->product_category_id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
            
            @error('product_category_id')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        {{-- <div>
            <label for="image">Foto tampilan</label>
            <input type="file" id="image" name="image">
            @error('image')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div> --}}
        <button type="submit">Edit</button>
    </form>
</body>
</html>