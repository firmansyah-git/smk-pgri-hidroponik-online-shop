<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('user_roles')->insert([
            [
                'role' => 'user',
            ],
            [
                'role' => 'admin',
            ],
            [
                'role' => 'superadmin',
            ]
        ]);

        DB::table('product_categories')->insert([
            [
                'name' => 'Sayuran Daun',
                'slug' => 'sayuran-daun',
                'description' => 'Berbagai jenis sayuran daun hidroponik segar dan organik',
                'image' => 'sayuran-daun.jpeg',
                'is_active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Buah-buahan',
                'slug' => 'buah-buahan',
                'description' => 'Buah-buahan hasil hidroponik berkualitas tinggi',
                'image' => 'buah-buahan.jpeg',
                'is_active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Herba & Rempah',
                'slug' => 'herba-rempah',
                'description' => 'Banaman herba dan rempah segar hidroponik',
                'image' => 'herba-rempah.jpeg',
                'is_active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Starter-kit',
                'slug' => 'starter-kit',
                'description' => 'Paket lengkap untuk memulai budidaya hidroponik',
                'image' => 'starter-kit.jpeg',
                'is_active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nutrisi & pupuk',
                'slug' => 'nutrisi-pupuk',
                'description' => 'Bebutuhan nutrisi dan pupuk khusus hidroponik',
                'image' => 'nutrisi-pupuk.jpeg',
                'is_active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Aksesoris',
                'slug' => 'aksesoris',
                'description' => 'Perlengkapan dan aksesoris hidroponik',
                'image' => 'aksesoris.jpeg',
                'is_active' => TRUE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

         DB::table('products')->insert([
            [
                'name' => 'Paket Selada Keriting Hidroponik',
                'slug' => 'paket-selada-keriting-hidroponik',
                'description' => 'Selada keriting segar hasil hidroponik tanpa pestisida, kaya nutrisi dan vitamin. Cocok untuk salad dan lalapan.',
                'price' => 25000.00,
                'weight' => 0.50,
                'stock' => 50,
                'min_stock' => 5,
                'views_count' => 0,
                'is_active' => TRUE,
                'product_category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Paket Kangkung Keriting Hidroponik',
                'slug' => 'paket-kangkung-keriting-hidroponik',
                'description' => 'Kangkung organik segar, tumbuh dengan sistem NFT. Rasanya renyah dan segar. Cocok untuk tumis dan sayur bening.',
                'price' => 18000.00,
                'weight' => 0.40,
                'stock' => 75,
                'min_stock' => 5,
                'views_count' => 0,
                'is_active' => TRUE,
                'product_category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Starter Kit Hidroponik DFT System',
                'slug' => 'starter-kit-hidroponik-dft-system',
                'description' => 'Paket lengkap untuk pemula: Pipa PVC, netpot, rockwool, nutrisi AB Mix, benih selada, dan panduan lengkap.',
                'price' => 35000.00,
                'weight' => 2.50,
                'stock' => 15,
                'min_stock' => 5,
                'views_count' => 0,
                'is_active' => TRUE,
                'product_category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
