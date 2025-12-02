<header>
    <div class="container flex justify-between items-center">
        <div class="logo">
            <a href="#" class="flex items-center">
                <img src="img/logo.png" alt="logo" class="w-20 h-20">
                <span class="logo__text">Gridupa</span>
            </a>
        </div>

        <nav>
            <ul class="nav__menu">
                <li class="nav__item">
                    <a href="#" class="nav__link">Produk</a>
                </li>
                <li class="nav__item">
                    <a href="#" class="nav__link">Kategori</a>
                </li>
                <li class="nav__item">
                    <a href="#" class="nav__link">Tentang</a>
                </li>
                <li class="nav__item">
                    <a href="#" class="nav__link">Kontak</a>
                </li>
            </ul>
        </nav>

        <div class="actions">
            <a href="{{ route('login') }}">
                Login
            </a>
        </div>
    </div>
</header>