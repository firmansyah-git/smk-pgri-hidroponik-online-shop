<aside id="sidebar" class="hidden left-0 top-0 h-screen w-65 bg-white">
    <div class="flex flex-col h-full px-4 pb-4">
        <!-- Logo -->
        <div class="flex justify-between items-center px-3 gap-4 h-20">
            <div class="flex items-center gap-2">
                <i data-lucide="leaf"></i>
                <h1 class="font-bold text-xl">Gridupa</h1>
            </div>
            <button class="btn">
                <i data-lucide="x" class="icon"></i>
            </button>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 flex-col pt-4">
            <h2 class="py-2 px-3 text-xs">MENU</h2>
            <ul class="flex flex-col gap-2">
                <li>
                    <a href="#" class="nav__link">
                        <i data-lucide="layout-dashboard" class="icon"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav__link">
                        <i data-lucide="shopping-cart" class="icon"></i>
                        <span>Pesanan</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav__link">
                        <i data-lucide="package" class="icon"></i>
                        <span>Produk</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav__link">
                        <i data-lucide="tags" class="icon"></i>
                        <span>Kategori Produk</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav__link">
                        <i data-lucide="users" class="icon"></i>
                        <span>Pelanggan</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div>
            <ul class="flex flex-col gap-2">
                <li>
                    <a href="#" class="flex items-center gap-4 px-3 py-2 rounded-lg text-gray-800 hover:bg-emerald-600/20">
                        <i data-lucide="moon" class="icon"></i>
                        <span>Night mode</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center gap-4 px-3 py-2 rounded-lg text-red-600 hover:bg-red-100">
                        <i data-lucide="log-out" class="icon"></i>
                        <span>Logout</span>
                    </a>
                </li>
                <li>
                    <div class="flex flex-col px-4 py-2 rounded-lg bg-emerald-100/50">
                        <h2 class="font-bold">Admin</h2>
                        <span class="text-sm text-gray-800">admin@gmail.com</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</aside>