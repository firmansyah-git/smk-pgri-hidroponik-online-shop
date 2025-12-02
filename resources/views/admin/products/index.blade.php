@extends('layouts.admin')

@section('title', 'Products')

@section('content')
<main class="p-6 bg-gray-50">

    <section class="section-header">
        <div class="section-header__info">
            <h1 class="section-header__title">Produk</h1>
            <p class="section-header__text">Manage products</p>
        </div>
        <div class="section-header__actions">
            <button class="btn">
                <i data-lucide="upload" class="icon"></i>
                <span>Export</span>
            </button>
            <a href="{{ route('products.create') }}" class="btn bg-primary text-white">
                <i data-lucide="plus" class="icon"></i>
                <span>Tambah Produk</span>
            </a>
        </div>
    </section>

    <!-- Products Table -->
    <div class="overflow-hidden rounded-xl bg-white shadow-sm">
        <div class="flex justify-between items-center p-3">
            <div class="filter">
                <select class="rounded-lg border border-gray-300 px-4 py-2 text-sm focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">
                    <option>Semua Kategori</option>
                    <option>Elektronik</option>
                    <option>Fashion</option>
                    <option>Makanan</option>
                    <option>Kesehatan</option>
                </select>
            </div>
            <button class="btn-search">
                <input type="search" name="search" placeholder="Cari...." class="btn-search__input">
                <i data-lucide="search" class="icon btn-search__icon"></i>
            </button>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr class="text-left text-sm font-semibold text-gray-700">
                        <th class="px-6 py-4">
                            <input type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        </th>
                        <th class="px-6 py-4">Produk</th>
                        <th class="px-6 py-4">Kategori</th>
                        <th class="px-6 py-4">Deskripsi</th>
                        <th class="px-6 py-4">Harga</th>
                        <th class="px-6 py-4">Berat</th>
                        <th class="px-6 py-4">Stok</th>
                        <th class="px-6 py-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="productsTable" class="divide-y divide-gray-100 text-sm">
                    @foreach ( $products as  $product)  
                    <tr class="text-left text-sm text-gray-700">
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">{{ $product->name }}</td>
                        <td class="px-6 py-4">{{ $product->productCategory->name }}</td>
                        <td class="px-6 py-4">{{ $product->description }}</td>
                        <td class="px-6 py-4">{{ $product->price }}</td>
                        <td class="px-6 py-4">{{ $product->weight }}</td>
                        <td class="px-6 py-4">{{ $product->stock }}</td>
                        <td class="px-6 py-4">
                            <div>
                                <a href="{{ route('products.show', $product->slug) }}" class="btn bg-green-600 text-white">
                                    <i data-lucide="pencil" class="icon"></i>
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('products.edit', $product->slug) }}" class="btn bg-blue-600 text-white">
                                    <i data-lucide="pencil" class="icon"></i>
                                </a>
                            </div>
                            <div>
                                <form action="{{ route('products.destroy', $product->slug) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn bg-red-500 text-white">
                                        <i data-lucide="trash-2" class="icon"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="flex items-center justify-between border-t border-gray-200 bg-white px-6 py-4">
            <div class="text-sm text-gray-500">
                Menampilkan <span class="font-medium">1-10</span> dari <span class="font-medium">48</span> produk
            </div>
            <div class="flex gap-2">
                <button class="rounded-lg border border-gray-300 px-3 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-50">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="rounded-lg bg-indigo-600 px-3 py-2 text-sm font-medium text-white">1</button>
                <button class="rounded-lg border border-gray-300 px-3 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-50">2</button>
                <button class="rounded-lg border border-gray-300 px-3 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-50">3</button>
                <button class="rounded-lg border border-gray-300 px-3 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-50">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</main>
@endsection