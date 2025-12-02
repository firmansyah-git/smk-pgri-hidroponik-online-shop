<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Produk - E-commerce Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Sidebar -->
    <aside id="sidebar" class="fixed left-0 top-0 z-40 h-screen w-64 bg-gradient-to-b from-indigo-600 to-indigo-800 text-white transition-transform duration-300">
        <div class="flex h-full flex-col">
            <div class="flex items-center gap-3 border-b border-indigo-700 px-6 py-5">
                <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-white text-indigo-600">
                    <i class="fas fa-store text-xl"></i>
                </div>
                <div>
                    <h1 class="text-lg font-bold">ShopAdmin</h1>
                    <p class="text-xs text-indigo-200">E-commerce Panel</p>
                </div>
            </div>

            <nav class="flex-1 overflow-y-auto px-3 py-4">
                <a href="#" class="mb-1 flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium transition hover:bg-white/10">
                    <i class="fas fa-home w-5"></i>
                    <span>Dashboard</span>
                </a>
                <a href="#" class="mb-1 flex items-center gap-3 rounded-lg bg-white/10 px-4 py-3 text-sm font-medium transition hover:bg-white/20">
                    <i class="fas fa-box w-5"></i>
                    <span>Produk</span>
                    <span class="ml-auto rounded-full bg-red-500 px-2 py-0.5 text-xs">12</span>
                </a>
                <a href="#" class="mb-1 flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium transition hover:bg-white/10">
                    <i class="fas fa-shopping-cart w-5"></i>
                    <span>Pesanan</span>
                    <span class="ml-auto rounded-full bg-yellow-500 px-2 py-0.5 text-xs">5</span>
                </a>
                <a href="#" class="mb-1 flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium transition hover:bg-white/10">
                    <i class="fas fa-users w-5"></i>
                    <span>Pelanggan</span>
                </a>
                <a href="#" class="mb-1 flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium transition hover:bg-white/10">
                    <i class="fas fa-chart-line w-5"></i>
                    <span>Laporan</span>
                </a>
                <a href="#" class="mb-1 flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium transition hover:bg-white/10">
                    <i class="fas fa-tags w-5"></i>
                    <span>Kategori</span>
                </a>
                <a href="#" class="mb-1 flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium transition hover:bg-white/10">
                    <i class="fas fa-cog w-5"></i>
                    <span>Pengaturan</span>
                </a>
            </nav>

            <div class="border-t border-indigo-700 p-4">
                <div class="flex items-center gap-3">
                    <img src="https://ui-avatars.com/api/?name=Admin+User&background=4F46E5&color=fff" alt="Admin" class="h-10 w-10 rounded-full">
                    <div class="flex-1">
                        <p class="text-sm font-medium">Admin User</p>
                        <p class="text-xs text-indigo-200">admin@shop.com</p>
                    </div>
                    <button class="text-indigo-200 hover:text-white">
                        <i class="fas fa-sign-out-alt"></i>
                    </button>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="ml-64">
        <!-- Header -->
        <header class="sticky top-0 z-30 bg-white shadow-sm">
            <div class="flex items-center justify-between px-6 py-4">
                <div class="flex items-center gap-4">
                    <button id="toggleSidebar" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <div>
                        <h2 class="text-xl font-bold text-gray-800">Kelola Produk</h2>
                        <p class="text-sm text-gray-500">Tambah, edit, dan hapus produk</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <div class="relative">
                        <input type="search" placeholder="Cari produk..." class="w-64 rounded-lg border border-gray-300 py-2 pl-10 pr-4 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                    <button class="relative rounded-lg p-2 text-gray-500 hover:bg-gray-100">
                        <i class="fas fa-bell text-xl"></i>
                        <span class="absolute right-1 top-1 h-2 w-2 rounded-full bg-red-500"></span>
                    </button>
                </div>
            </div>
        </header>

        <!-- Products Content -->
        <main class="p-6">
            <!-- Action Bar -->
            <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex gap-2">
                    <button onclick="openModal('add')" class="flex items-center gap-2 rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-medium text-white transition hover:bg-indigo-700">
                        <i class="fas fa-plus"></i>
                        Tambah Produk
                    </button>
                    <button class="flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-50">
                        <i class="fas fa-file-export"></i>
                        Ekspor
                    </button>
                </div>
                <div class="flex gap-2">
                    <select class="rounded-lg border border-gray-300 px-4 py-2.5 text-sm focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">
                        <option>Semua Kategori</option>
                        <option>Elektronik</option>
                        <option>Fashion</option>
                        <option>Makanan</option>
                        <option>Kesehatan</option>
                    </select>
                    <select class="rounded-lg border border-gray-300 px-4 py-2.5 text-sm focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">
                        <option>Semua Status</option>
                        <option>Aktif</option>
                        <option>Draft</option>
                        <option>Stok Habis</option>
                    </select>
                </div>
            </div>

            <!-- Products Table -->
            <div class="overflow-hidden rounded-xl bg-white shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr class="text-left text-sm font-semibold text-gray-700">
                                <th class="px-6 py-4">
                                    <input type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                </th>
                                <th class="px-6 py-4">Produk</th>
                                <th class="px-6 py-4">Kategori</th>
                                <th class="px-6 py-4">Harga</th>
                                <th class="px-6 py-4">Stok</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4">Terjual</th>
                                <th class="px-6 py-4 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="productsTable" class="divide-y divide-gray-100 text-sm">
                            <!-- Product rows will be inserted here -->
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
    </div>

    <!-- Modal Add/Edit Product -->
    <div id="productModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50">
        <div class="max-h-[90vh] w-full max-w-3xl overflow-y-auto rounded-xl bg-white p-0 shadow-xl">
            <!-- Modal Header -->
            <div class="sticky top-0 z-10 flex items-center justify-between border-b bg-white px-6 py-4">
                <h3 id="modalTitle" class="text-xl font-bold text-gray-900">Tambah Produk Baru</h3>
                <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <form id="productForm" class="p-6">
                <div class="space-y-6">
                    <!-- Product Images -->
                    <div>
                        <label class="mb-2 block text-sm font-medium text-gray-700">Gambar Produk</label>
                        <div class="flex gap-4">
                            <div class="flex h-32 w-32 cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-300 bg-gray-50 transition hover:border-indigo-500 hover:bg-indigo-50">
                                <i class="fas fa-cloud-upload-alt mb-2 text-2xl text-gray-400"></i>
                                <span class="text-xs text-gray-500">Upload Gambar</span>
                                <input type="file" class="hidden" accept="image/*" multiple>
                            </div>
                            <div id="imagePreview" class="flex gap-4"></div>
                        </div>
                    </div>

                    <!-- Product Name -->
                    <div>
                        <label class="mb-2 block text-sm font-medium text-gray-700">Nama Produk *</label>
                        <input type="text" id="productName" required class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200" placeholder="Masukkan nama produk">
                    </div>

                    <!-- Category and Brand -->
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-700">Kategori *</label>
                            <select id="productCategory" required class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">
                                <option value="">Pilih kategori</option>
                                <option value="elektronik">Elektronik</option>
                                <option value="fashion">Fashion</option>
                                <option value="makanan">Makanan & Minuman</option>
                                <option value="kesehatan">Kesehatan & Kecantikan</option>
                                <option value="rumah">Rumah & Taman</option>
                            </select>
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-700">Brand</label>
                            <input type="text" id="productBrand" class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200" placeholder="Nama brand">
                        </div>
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="mb-2 block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea id="productDescription" rows="4" class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200" placeholder="Deskripsi produk"></textarea>
                    </div>

                    <!-- Price and Stock -->
                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-700">Harga *</label>
                            <div class="relative">
                                <span class="absolute left-3 top-3 text-gray-500">Rp</span>
                                <input type="number" id="productPrice" required class="w-full rounded-lg border border-gray-300 py-2.5 pl-10 pr-4 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200" placeholder="0">
                            </div>
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-700">Stok *</label>
                            <input type="number" id="productStock" required class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200" placeholder="0">
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-700">SKU</label>
                            <input type="text" id="productSKU" class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200" placeholder="SKU-001">
                        </div>
                    </div>

                    <!-- Discount and Weight -->
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-700">Diskon (%)</label>
                            <input type="number" id="productDiscount" min="0" max="100" class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200" placeholder="0">
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-700">Berat (gram)</label>
                            <input type="number" id="productWeight" class="w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200" placeholder="0">
                        </div>
                    </div>

                    <!-- Status -->
                    <div>
                        <label class="mb-2 block text-sm font-medium text-gray-700">Status</label>
                        <div class="flex gap-4">
                            <label class="flex items-center gap-2">
                                <input type="radio" name="status" value="active" checked class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <span class="text-sm text-gray-700">Aktif</span>
                            </label>
                            <label class="flex items-center gap-2">
                                <input type="radio" name="status" value="draft" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <span class="text-sm text-gray-700">Draft</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="mt-6 flex gap-3 border-t pt-6">
                    <button type="button" onclick="closeModal()" class="flex-1 rounded-lg border border-gray-300 px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-50">
                        Batal
                    </button>
                    <button type="submit" class="flex-1 rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-medium text-white transition hover:bg-indigo-700">
                        <i class="fas fa-save mr-2"></i>
                        Simpan Produk
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50">
        <div class="w-full max-w-md rounded-xl bg-white p-6 shadow-xl">
            <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-red-100">
                <i class="fas fa-trash-alt text-xl text-red-600"></i>
            </div>
            <h3 class="mb-2 text-xl font-bold text-gray-900">Hapus Produk?</h3>
            <p class="mb-6 text-gray-600">Apakah Anda yakin ingin menghapus produk ini? Tindakan ini tidak dapat dibatalkan.</p>
            <div class="flex gap-3">
                <button onclick="closeDeleteModal()" class="flex-1 rounded-lg border border-gray-300 px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-50">
                    Batal
                </button>
                <button onclick="confirmDelete()" class="flex-1 rounded-lg bg-red-600 px-4 py-2.5 text-sm font-medium text-white transition hover:bg-red-700">
                    Hapus
                </button>
            </div>
        </div>
    </div>

    <script>
        // Sample Products Data
        let products = [
            { id: 1, name: 'Laptop Gaming X1', category: 'Elektronik', price: 15500000, stock: 25, status: 'active', sold: 245, image: 'https://images.unsplash.com/photo-1603302576837-37561b2e2302?w=100&h=100&fit=crop' },
            { id: 2, name: 'Smartphone Pro Max', category: 'Elektronik', price: 8900000, stock: 50, status: 'active', sold: 189, image: 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=100&h=100&fit=crop' },
            { id: 3, name: 'Wireless Earbuds', category: 'Elektronik', price: 1250000, stock: 0, status: 'out-of-stock', sold: 412, image: 'https://images.unsplash.com/photo-1590658268037-6bf12165a8df?w=100&h=100&fit=crop' },
            { id: 4, name: 'Smartwatch Series 5', category: 'Elektronik', price: 2800000, stock: 35, status: 'active', sold: 156, image: 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=100&h=100&fit=crop' },
            { id: 5, name: 'Mechanical Keyboard RGB', category: 'Elektronik', price: 850000, stock: 60, status: 'active', sold: 203, image: 'https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=100&h=100&fit=crop' },
            { id: 6, name: 'Gaming Mouse Pro', category: 'Elektronik', price: 450000, stock: 80, status: 'active', sold: 321, image: 'https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=100&h=100&fit=crop' },
            { id: 7, name: 'Tablet 10 inch', category: 'Elektronik', price: 4500000, stock: 15, status: 'draft', sold: 78, image: 'https://images.unsplash.com/photo-1561154464-82e9adf32764?w=100&h=100&fit=crop' },
            { id: 8, name: 'Bluetooth Speaker', category: 'Elektronik', price: 650000, stock: 45, status: 'active', sold: 267, image: 'https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=100&h=100&fit=crop' },
            { id: 9, name: 'USB-C Hub 7in1', category: 'Elektronik', price: 350000, stock: 90, status: 'active', sold: 145, image: 'https://images.unsplash.com/photo-1625948515291-69613efd103f?w=100&h=100&fit=crop' },
            { id: 10, name: 'Webcam HD Pro', category: 'Elektronik', price: 750000, stock: 28, status: 'active', sold: 98, image: 'https://images.unsplash.com/photo-1594731956511-c336f81fbb5c?w=100&h=100&fit=crop' }
        ];

        let currentEditId = null;
        let deleteProductId = null;

        // Format currency
        function formatCurrency(amount) {
            return 'Rp ' + amount.toLocaleString('id-ID');
        }

        // Get status badge
        function getStatusBadge(status) {
            const badges = {
                'active': '<span class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">Aktif</span>',
                'draft': '<span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-medium text-yellow-700">Draft</span>',
                'out-of-stock': '<span class="rounded-full bg-red-100 px-3 py-1 text-xs font-medium text-red-700">Stok Habis</span>'
            };
            return badges[status] || badges['active'];
        }

        // Render products table
        function renderProducts() {
            const tbody = document.getElementById('productsTable');
            tbody.innerHTML = products.map(product => `
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">
                        <input type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <img src="${product.image}" alt="${product.name}" class="h-12 w-12 rounded-lg object-cover">
                            <div>
                                <p class="font-medium text-gray-900">${product.name}</p>
                                <p class="text-xs text-gray-500">SKU: PRD-${product.id.toString().padStart(4, '0')}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-gray-600">${product.category}</td>
                    <td class="px-6 py-4 font-medium text-gray-900">${formatCurrency(product.price)}</td>
                    <td class="px-6 py-4">
                        <span class="text-gray-900 ${product.stock < 20 ? 'text-orange-600 font-medium' : ''}">${product.stock}</span>
                    </td>
                    <td class="px-6 py-4">${getStatusBadge(product.status)}</td>
                    <td class="px-6 py-4 text-gray-600">${product.sold}</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <button onclick="viewProduct(${product.id})" class="rounded-lg p-2 text-blue-600 transition hover:bg-blue-50" title="Lihat">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button onclick="editProduct(${product.id})" class="rounded-lg p-2 text-indigo-600 transition hover:bg-indigo-50" title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button onclick="openDeleteModal(${product.id})" class="rounded-lg p-2 text-red-600 transition hover:bg-red-50" title="Hapus">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            `).join('');
        }

        // Modal functions
        function openModal(mode, productId = null) {
            const modal = document.getElementById('productModal');
            const modalTitle = document.getElementById('modalTitle');
            const form = document.getElementById('productForm');
            
            if (mode === 'add') {
                modalTitle.textContent = 'Tambah Produk Baru';
                form.reset();
                currentEditId = null;
            } else if (mode === 'edit' && productId) {
                modalTitle.textContent = 'Edit Produk';
                const product = products.find(p => p.id === productId);
                if (product) {
                    document.getElementById('productName').value = product.name;
                    document.getElementById('productCategory').value = product.category.toLowerCase();
                    document.getElementById('productPrice').value = product.price;
                    document.getElementById('productStock').value = product.stock;
                    currentEditId = productId;
                }
            }
            
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeModal() {
            const modal = document.getElementById('productModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            currentEditId = null;
        }

        function viewProduct(id) {
            const product = products.find(p => p.id === id);
            alert(`Melihat detail produk: ${product.name}\n\nFitur detail produk akan ditampilkan di sini.`);
        }

        function editProduct(id) {
            openModal('edit', id);
        }

        function openDeleteModal(id) {
            deleteProductId = id;
            const modal = document.getElementById('deleteModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeDeleteModal() {
            const modal = document.getElementById('deleteModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            deleteProductId = null;
        }
    </script>