@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<main class="p-6">
    <!-- Stats Cards -->
    <div class="mb-6 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
        <!-- Card 1 -->
        <div class="overflow-hidden rounded-xl bg-white shadow-sm transition hover:shadow-md">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600">Total Penjualan</p>
                        <h3 class="mt-2 text-3xl font-bold text-gray-900">Rp 45.2M</h3>
                        <p class="mt-2 flex items-center text-sm text-green-600">
                            <i class="fas fa-arrow-up mr-1"></i>
                            <span>12.5% dari bulan lalu</span>
                        </p>
                    </div>
                    <div class="flex h-14 w-14 items-center justify-center rounded-full bg-gradient-to-br from-blue-500 to-blue-600 text-white">
                        <i class="fas fa-dollar-sign text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="overflow-hidden rounded-xl bg-white shadow-sm transition hover:shadow-md">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600">Pesanan Baru</p>
                        <h3 class="mt-2 text-3xl font-bold text-gray-900">328</h3>
                        <p class="mt-2 flex items-center text-sm text-green-600">
                            <i class="fas fa-arrow-up mr-1"></i>
                            <span>8.2% dari bulan lalu</span>
                        </p>
                    </div>
                    <div class="flex h-14 w-14 items-center justify-center rounded-full bg-gradient-to-br from-green-500 to-green-600 text-white">
                        <i class="fas fa-shopping-bag text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="overflow-hidden rounded-xl bg-white shadow-sm transition hover:shadow-md">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600">Pelanggan Aktif</p>
                        <h3 class="mt-2 text-3xl font-bold text-gray-900">1,482</h3>
                        <p class="mt-2 flex items-center text-sm text-red-600">
                            <i class="fas fa-arrow-down mr-1"></i>
                            <span>3.1% dari bulan lalu</span>
                        </p>
                    </div>
                    <div class="flex h-14 w-14 items-center justify-center rounded-full bg-gradient-to-br from-purple-500 to-purple-600 text-white">
                        <i class="fas fa-users text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="overflow-hidden rounded-xl bg-white shadow-sm transition hover:shadow-md">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600">Total Produk</p>
                        <h3 class="mt-2 text-3xl font-bold text-gray-900">892</h3>
                        <p class="mt-2 flex items-center text-sm text-green-600">
                            <i class="fas fa-arrow-up mr-1"></i>
                            <span>15.3% dari bulan lalu</span>
                        </p>
                    </div>
                    <div class="flex h-14 w-14 items-center justify-center rounded-full bg-gradient-to-br from-orange-500 to-orange-600 text-white">
                        <i class="fas fa-box text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts and Tables -->
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
        <!-- Recent Orders -->
        <div class="lg:col-span-2">
            <div class="rounded-xl bg-white p-6 shadow-sm">
                <div class="mb-4 flex items-center justify-between">
                    <h3 class="text-lg font-bold text-gray-900">Pesanan Terbaru</h3>
                    <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-700">Lihat Semua</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-gray-200 text-left text-sm font-medium text-gray-600">
                                <th class="pb-3">ID Pesanan</th>
                                <th class="pb-3">Pelanggan</th>
                                <th class="pb-3">Produk</th>
                                <th class="pb-3">Total</th>
                                <th class="pb-3">Status</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            <tr class="border-b border-gray-100">
                                <td class="py-4 font-medium text-gray-900">#ORD-2024-001</td>
                                <td class="py-4 text-gray-600">Budi Santoso</td>
                                <td class="py-4 text-gray-600">Laptop Gaming</td>
                                <td class="py-4 font-medium text-gray-900">Rp 15.500.000</td>
                                <td class="py-4">
                                    <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">Selesai</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-4 font-medium text-gray-900">#ORD-2024-002</td>
                                <td class="py-4 text-gray-600">Siti Nurhaliza</td>
                                <td class="py-4 text-gray-600">Smartphone Pro</td>
                                <td class="py-4 font-medium text-gray-900">Rp 8.900.000</td>
                                <td class="py-4">
                                    <span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-medium text-yellow-700">Proses</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-4 font-medium text-gray-900">#ORD-2024-003</td>
                                <td class="py-4 text-gray-600">Ahmad Rizki</td>
                                <td class="py-4 text-gray-600">Headphone Wireless</td>
                                <td class="py-4 font-medium text-gray-900">Rp 1.250.000</td>
                                <td class="py-4">
                                    <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-700">Dikirim</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-4 font-medium text-gray-900">#ORD-2024-004</td>
                                <td class="py-4 text-gray-600">Dewi Lestari</td>
                                <td class="py-4 text-gray-600">Tablet 10 inch</td>
                                <td class="py-4 font-medium text-gray-900">Rp 4.500.000</td>
                                <td class="py-4">
                                    <span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-medium text-yellow-700">Proses</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-4 font-medium text-gray-900">#ORD-2024-005</td>
                                <td class="py-4 text-gray-600">Eko Prasetyo</td>
                                <td class="py-4 text-gray-600">Smartwatch</td>
                                <td class="py-4 font-medium text-gray-900">Rp 2.800.000</td>
                                <td class="py-4">
                                    <span class="rounded-full bg-red-100 px-3 py-1 text-xs font-medium text-red-700">Pending</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Top Products & Quick Actions -->
        <div class="space-y-6">
            <!-- Top Products -->
            <div class="rounded-xl bg-white p-6 shadow-sm">
                <h3 class="mb-4 text-lg font-bold text-gray-900">Produk Terlaris</h3>
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="h-12 w-12 rounded-lg bg-gradient-to-br from-blue-400 to-blue-600"></div>
                        <div class="flex-1">
                            <p class="font-medium text-gray-900">Laptop Gaming X1</p>
                            <p class="text-sm text-gray-500">245 terjual</p>
                        </div>
                        <span class="text-sm font-bold text-gray-900">Rp 15.5M</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="h-12 w-12 rounded-lg bg-gradient-to-br from-purple-400 to-purple-600"></div>
                        <div class="flex-1">
                            <p class="font-medium text-gray-900">Smartphone Pro Max</p>
                            <p class="text-sm text-gray-500">189 terjual</p>
                        </div>
                        <span class="text-sm font-bold text-gray-900">Rp 12.3M</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="h-12 w-12 rounded-lg bg-gradient-to-br from-green-400 to-green-600"></div>
                        <div class="flex-1">
                            <p class="font-medium text-gray-900">Wireless Earbuds</p>
                            <p class="text-sm text-gray-500">412 terjual</p>
                        </div>
                        <span class="text-sm font-bold text-gray-900">Rp 8.7M</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="h-12 w-12 rounded-lg bg-gradient-to-br from-orange-400 to-orange-600"></div>
                        <div class="flex-1">
                            <p class="font-medium text-gray-900">Smartwatch Series 5</p>
                            <p class="text-sm text-gray-500">156 terjual</p>
                        </div>
                        <span class="text-sm font-bold text-gray-900">Rp 6.2M</span>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 p-6 text-white shadow-sm">
                <h3 class="mb-4 text-lg font-bold">Aksi Cepat</h3>
                <div class="space-y-3">
                    <button class="w-full rounded-lg bg-white/20 px-4 py-3 text-left font-medium transition hover:bg-white/30">
                        <i class="fas fa-plus mr-2"></i>
                        Tambah Produk Baru
                    </button>
                    <button class="w-full rounded-lg bg-white/20 px-4 py-3 text-left font-medium transition hover:bg-white/30">
                        <i class="fas fa-file-export mr-2"></i>
                        Ekspor Laporan
                    </button>
                    <button class="w-full rounded-lg bg-white/20 px-4 py-3 text-left font-medium transition hover:bg-white/30">
                        <i class="fas fa-bullhorn mr-2"></i>
                        Buat Promosi
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection