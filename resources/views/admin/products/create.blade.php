@extends('layouts.admin')

@section('title', 'Products')

@section('content')

<main class="p-6 bg-gray-50">
    <a href="{{ route('products.index') }}" class="btn w-fit mb-2">
        <i data-lucide="arrow-left" class="icon"></i>
        <span>Kembali</span>
    </a>
    <section class="section-header">
        <div class="section-header__info">
            <h1 class="section-header__title">{{ isset($product) ? 'Edit ' : 'Tambah ' }} Produk</h1>
            <p class="section-header__text">Manage products</p>
        </div>
    </section>

    <div class="form-container">
        <form action="{{ isset($product) ? route('products.update', $product) : route('products.store') }}" method="post" enctype="multipart/form-data" >
            @csrf
            @if (@isset($product))
                @method('PUT')
            @endif
            <div class="form__field">
                <label for="name" class="form__label">
                    Nama Produk
                    <span class="text-red-500">*</span>
                </label>
                <input type="text" 
                        name="name" 
                        id="name" 
                        placeholder="Masukkan nama produk"
                        value="{{ isset($product) ? $product->name : old('name') }}"
                        class="form__input @error('name') border-red-500 @enderror">
                @error('name')
                    <div class="form__error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form__group grid-cols-2">
                <div class="form__field">
                    <label for="price" class="form__label">
                        Harga
                        <span class="text-red-500">*</span>
                    </label>
                    <input type="number" 
                            name="price" 
                            id="price" 
                            placeholder="Masukkan harga"
                            value="{{ isset($product) ? $product->price : old('price') }}"
                            class="form__input @error('price') border-red-500 @enderror">
                    @error('price')
                        <div class="form__error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form__field">
                    <label for="product_category_id" class="form__label">
                        Kategori
                        <span class="text-red-500">*</span>
                    </label>
                    <select name="product_category_id" 
                            id="product_category_id" 
                            class="form__input @error('product_category_id') border-red-500 @enderror">>
                        <option value="">Pilih Kategori</option>
                        @foreach ($product_categories as $product_category)
                            <option value="{{ $product_category->id }}">{{ $product_category->name }}</option>
                        @endforeach
                    </select>
                    @error('product_category_id')
                        <div class="form__error">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form__group grid-cols-3">
                <div class="form__field">
                    <label for="weight" class="form__label">
                        Berat
                        <span class="text-red-500">*</span>
                    </label>
                    <input type="number" 
                            name="weight" 
                            id="weight" 
                            placeholder="Masukkan berat produk"
                            value="{{ isset($product) ? $product->weoght : old('weight') }}"
                            class="form__input @error('weight') border-red-500 @enderror">
                    @error('weight')
                        <div class="form__error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form__field">
                    <label for="stock" class="form__label">
                        Stok
                        <span class="text-red-500">*</span>
                    </label>
                    <input type="number" 
                            name="stock" 
                            id="stock" 
                            placeholder="Masukkan jumlah stok"
                            value="{{ isset($product) ? $product->stock : old('stock') }}"
                            class="form__input @error('stock') border-red-500 @enderror">
                    @error('stock')
                        <div class="form__error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form__field">
                    <label for="min_stock" class="form__label">
                        Minimal stok
                        <span class="text-red-500">*</span>
                    </label>
                    <input type="number" 
                            name="min_stock" 
                            id="min_stock" 
                            placeholder="Masukkan jumlah minimum stok"
                            value="{{ isset($product) ? $product->min_stock : old('min_stock') }}"
                            class="form__input @error('min_stock') border-red-500 @enderror">
                    @error('min_stock')
                        <div class="form__error">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form__field">
                <label for="description" class="form__label">
                    Deskripsi
                    <span class="text-red-500">*</span>
                </label>
                <textarea name="description" 
                            id="description" 
                            rows="4"
                            placeholder="Masukkan deskripsi produk"
                            class="form__input @error('description') border-red-500 @enderror">
                    {{ isset($product) ? $product->description : old('description') }}
                </textarea>
            </div>

            <div class="form__field">
                <label for="image" class="form__label">
                    Foto produk
                    <span class="text-red-500">*</span>
                </label>
                <div class="flex items-start space-x-4">
                    @if(isset($product) && $product->productImage->image)
                        <img src="{{ asset('storage/' . $product->productImage->image) }}" 
                                alt="Current product image" 
                                class="w-24 h-24 object-cover rounded-lg border border-gray-200">
                    @endif
                    <div class="flex-1">
                        <label for="image" class="form__label-image @error('image') border-red-500 @enderror">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-10 h-10 mb-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                </svg>
                                <p class="mb-1  text-gray-600">
                                    <span class="font-semibold">Click to upload</span> or drag and drop
                                </p>
                                <p class=" text-gray-500">PNG, JPG, JPEG (MAX. 2MB)</p>
                            </div>
                            <input id="image" name="image" type="file" class="hidden" accept="image/*" />
                        </label>
                        @error('image')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form__field">
                <label class="form__label">
                    Status
                </label>
                <div class="flex items-center space-x-4">
                    <label class="inline-flex items-center">
                        <input type="radio" 
                                name="is_active" 
                                value="1" 
                                {{ old('is_active', $product->is_active ?? 1) == 'active' ? 'checked' : '' }}
                                class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                        <span class="ml-2 text-xs md:text-sm text-gray-700">Active</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" 
                                name="is_active" 
                                value="0" 
                                {{ old('is_active', $product->is_active ?? 0) == 'inactive' ? 'checked' : '' }}
                                class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                        <span class="ml-2 text-xs md:text-sm text-gray-700">Inactive</span>
                    </label>
                </div>
            </div>

            <div class="form__actions">
                <button class="btn">
                    <a href="{{ route('products.index') }}">
                        Cancel
                    </a>
                </button>
                <button class="btn btn__submit" type="submit">
                    Tambah produk
                </button>
            </div>
        </form>
    </div>
</main>

@endsection