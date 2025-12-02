@extends('layouts.admin')

@section('title', 'Products')

@section('content')
<main class="p-6 bg-gray-50">
    <div>
        <a href="{{ route('products.index') }}" class="btn w-fit mb-2">
            <i data-lucide="arrow-left" class="icon"></i>
            <span>Kembali</span>
        </a>
        <section class="section-header">
            <div class="section-header__info">
                <h1 class="section-header__title">Detail Produk</h1>
                <p class="section-header__text">Manage products</p>
            </div>
        </section>
    </div>

    <section class="detail">
        <div class="detail__content">

        </div>
    </section>



<div class="min-h-screen bg-gray-50 py-8 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Breadcrumb & Actions -->
        <div class="flex items-center justify-between mb-6">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ route('products.index') }}" class="text-gray-600 hover:text-gray-900 transition-colors">
                    Products
                </a>
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="text-gray-900 font-medium">{{ Str::limit($product->name, 30) }}</span>
            </nav>

            <div class="flex items-center space-x-3">
                <a href="{{ route('products.edit', $product) }}" 
                   class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                    Edit
                </a>
                <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-lg text-sm font-medium text-white hover:bg-red-700 transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>
                        Delete
                    </button>
                </form>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Product Image & Info Card -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6">
                        <!-- Product Image -->
                        <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" 
                                     alt="{{ $product->name }}" 
                                     class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full flex items-center justify-center">
                                    <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            @endif
                        </div>

                        <!-- Product Info -->
                        <div class="flex flex-col">
                            <div class="flex-1">
                                <div class="flex items-start justify-between mb-4">
                                    <div>
                                        <h1 class="text-2xl font-bold text-gray-900 mb-2">{{ $product->name }}</h1>
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium {{ $product->status === 'active' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                            {{ ucfirst($product->status) }}
                                        </span>
                                    </div>
                                </div>

                                <div class="space-y-3 mb-6">
                                    <div class="flex items-center text-sm">
                                        <span class="text-gray-500 w-24">SKU</span>
                                        <span class="font-medium text-gray-900">{{ $product->sku }}</span>
                                    </div>
                                    <div class="flex items-center text-sm">
                                        <span class="text-gray-500 w-24">Category</span>
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-xs font-medium bg-blue-100 text-blue-800">
                                            {{ $product->category->name ?? 'Uncategorized' }}
                                        </span>
                                    </div>
                                </div>

                                <div class="border-t border-gray-200 pt-4">
                                    <div class="text-3xl font-bold text-gray-900">
                                        Rp {{ number_format($product->price, 0, ',', '.') }}
                                    </div>
                                    @if($product->cost)
                                        <div class="mt-1 text-sm text-gray-500">
                                            Cost: Rp {{ number_format($product->cost, 0, ',', '.') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <!-- Stock Info -->
                            <div class="mt-4 p-4 bg-gray-50 rounded-lg">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-medium text-gray-700">Stock Available</span>
                                    <span class="text-2xl font-bold {{ $product->stock > 10 ? 'text-green-600' : ($product->stock > 0 ? 'text-yellow-600' : 'text-red-600') }}">
                                        {{ $product->stock }}
                                    </span>
                                </div>
                                <div class="mt-2 w-full bg-gray-200 rounded-full h-2">
                                    <div class="h-2 rounded-full {{ $product->stock > 10 ? 'bg-green-600' : ($product->stock > 0 ? 'bg-yellow-600' : 'bg-red-600') }}" 
                                         style="width: {{ min(($product->stock / 100) * 100, 100) }}%"></div>
                                </div>
                                @if($product->stock <= 10 && $product->stock > 0)
                                    <p class="mt-2 text-xs text-yellow-600 font-medium">Low stock warning</p>
                                @elseif($product->stock == 0)
                                    <p class="mt-2 text-xs text-red-600 font-medium">Out of stock</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Description Card -->
                @if($product->description)
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">Product Description</h2>
                    <div class="prose prose-sm max-w-none text-gray-600">
                        {{ $product->description }}
                    </div>
                </div>
                @endif

                <!-- Additional Information -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">Additional Information</h2>
                    <dl class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="border-l-4 border-blue-500 pl-4">
                            <dt class="text-sm font-medium text-gray-500">Created At</dt>
                            <dd class="mt-1 text-sm text-gray-900">{{ $product->created_at->format('d M Y, H:i') }}</dd>
                        </div>
                        <div class="border-l-4 border-blue-500 pl-4">
                            <dt class="text-sm font-medium text-gray-500">Last Updated</dt>
                            <dd class="mt-1 text-sm text-gray-900">{{ $product->updated_at->format('d M Y, H:i') }}</dd>
                        </div>
                        @if($product->cost && $product->price)
                        <div class="border-l-4 border-green-500 pl-4">
                            <dt class="text-sm font-medium text-gray-500">Profit Margin</dt>
                            <dd class="mt-1 text-sm font-bold text-green-600">
                                {{ number_format((($product->price - $product->cost) / $product->price) * 100, 1) }}%
                            </dd>
                        </div>
                        <div class="border-l-4 border-green-500 pl-4">
                            <dt class="text-sm font-medium text-gray-500">Profit Per Unit</dt>
                            <dd class="mt-1 text-sm font-bold text-green-600">
                                Rp {{ number_format($product->price - $product->cost, 0, ',', '.') }}
                            </dd>
                        </div>
                        @endif
                    </dl>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Quick Stats -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <h3 class="text-sm font-semibold text-gray-900 mb-4">Quick Stats</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                            <div class="flex items-center">
                                <div class="p-2 bg-blue-100 rounded-lg">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-xs text-gray-600">Price</p>
                                    <p class="text-sm font-bold text-gray-900">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-3 bg-green-50 rounded-lg">
                            <div class="flex items-center">
                                <div class="p-2 bg-green-100 rounded-lg">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-xs text-gray-600">Stock</p>
                                    <p class="text-sm font-bold text-gray-900">{{ $product->stock }} units</p>
                                </div>
                            </div>
                        </div>

                        @if($product->cost && $product->price)
                        <div class="flex items-center justify-between p-3 bg-purple-50 rounded-lg">
                            <div class="flex items-center">
                                <div class="p-2 bg-purple-100 rounded-lg">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-xs text-gray-600">Profit</p>
                                    <p class="text-sm font-bold text-gray-900">{{ number_format((($product->price - $product->cost) / $product->price) * 100, 1) }}%</p>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Product Status -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <h3 class="text-sm font-semibold text-gray-900 mb-4">Product Status</h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600">Visibility</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $product->status === 'active' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                {{ ucfirst($product->status) }}
                            </span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600">Availability</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $product->stock > 0 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $product->stock > 0 ? 'In Stock' : 'Out of Stock' }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Actions Card -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <h3 class="text-sm font-semibold text-gray-900 mb-4">Actions</h3>
                    <div class="space-y-2">
                        <a href="{{ route('products.edit', $product) }}" 
                           class="flex items-center justify-center w-full px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition-colors">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                            Edit Product
                        </a>
                        <button onclick="window.print()" 
                                class="flex items-center justify-center w-full px-4 py-2 bg-gray-100 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-200 transition-colors">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>
                            </svg>
                            Print Details
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection