<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    @vite('resources/css/app.css')
    <title>Hidroponik</title>
</head>
<body>
    @include('partials.header')
    <main>
        <section class="hero-section">
            <div class="container w-2/3 text-white z-10">
                <h1 class="font-black text-5xl pb-6">Segar, Sehat, 
                    <span>Berkesinambungan</span>
                </h1>
                <p class="text-sm">Hasil hidroponik segar langsung dari SMK PGRI 02 Palembang. Tanpa pestisida, penuh nutrisi, untuk hidup yang lebih sehat. </p>
            </div>
        </section>
        <section class="bg-forest-green text-white">
            <div class="container about-section">
                <img src="" alt="Keunggulan" class="min-w-1/2">
                <div>
                    <div class="section__header">
                        <div class="section__label">
                            <span class="material-symbols-outlined icon">eco</span>
                            <span>Mengapa memilih kami</span>
                        </div>
                        <h2 class="section__title">Keunggulan Produk Kami</h2>
                        <p class="section__desc">Kualitas terbaik dengan sistem budidaya modern</p>
                    </div>
                    <div class="card-container about">
                        <div class="card">
                            <div class="card__media">
                                <span class="card__icon">

                                </span>
                            </div>
                            <div class="card__content">
                                <h3 class="card__title">100% Organik</h3>
                                <p class="card__description">Tanpa pestisida dan bahan kimia berbahaya. Aman untuk konsumsi sehari-hari. </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card__media">
                                <span class="card__icon">

                                </span>
                            </div>
                            <div class="card__content">
                                <h3 class="card__title">100% Organik</h3>
                                <p class="card__description">Tanpa pestisida dan bahan kimia berbahaya. Aman untuk konsumsi sehari-hari. </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card__media">
                                <span class="card__icon">

                                </span>
                            </div>
                            <div class="card__content">
                                <h3 class="card__title">100% Organik</h3>
                                <p class="card__description">Tanpa pestisida dan bahan kimia berbahaya. Aman untuk konsumsi sehari-hari. </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card__media">
                                <span class="card__icon">

                                </span>
                            </div>
                            <div class="card__content">
                                <h3 class="card__title">100% Organik</h3>
                                <p class="card__description">Tanpa pestisida dan bahan kimia berbahaya. Aman untuk konsumsi sehari-hari. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="section__header">
                    <div class="section__label">
                        <span class="material-symbols-outlined icon">eco</span>
                        <span>Produk Unggulan</span>
                    </div>
                    <h2 class="section__title">Produk Kami</h2>
                    <p class="section__desc">Pilihan produk hidroponik terpopuler kami</p>
                </div>
                <div class="card-container products">
                    <div class="card product">
                        <div class="card__media">
                            <img class="product__img" src="img/produk.jpeg" alt="" srcset="">
                        </div>
                        <div class="card__content">
                            <h3 class="product__title">Paket Kangkung Hidroponik Organik</h3>
                            <p class="product__price">Rp 20.000</p>
                        </div>
                        <div class="card__actions">
                            <button class="button-shop">
                                <span class="material-symbols-outlined">shopping_bag</span>
                            </button>
                        </div>
                    </div>
                    <div class="card product">
                        <div class="card__media">
                            <img class="product__img" src="img/produk.jpeg" alt="" srcset="">
                        </div>
                        <div class="card__content">
                            <h3 class="product__title">Paket Kangkung Hidroponik Organik</h3>
                            <p class="product__price">Rp 20.000</p>
                        </div>
                        <div class="card__actions">
                            <button class="button-shop">
                                <span class="material-symbols-outlined">shopping_bag</span>
                            </button>
                        </div>
                    </div>
                    <div class="card product">
                        <div class="card__media">
                            <img class="product__img" src="img/produk.jpeg" alt="" srcset="">
                        </div>
                        <div class="card__content">
                            <h3 class="product__title">Paket Kangkung Hidroponik Organik</h3>
                            <p class="product__price">Rp 20.000</p>
                        </div>
                        <div class="card__actions">
                            <button class="button-shop">
                                <span class="material-symbols-outlined">shopping_bag</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>