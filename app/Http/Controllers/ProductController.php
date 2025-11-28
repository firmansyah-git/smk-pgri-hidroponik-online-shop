<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Exception;

class ProductController extends Controller
{
    public function index () {
        $products = Product::with('productCategory')->get();
        return view('admin.products.index', compact('products'));
    }

    public function create () {
        $product_categories = ProductCategory::all();
        return view('admin.products.create', compact('product_categories'));
    }

    public function store (StoreProductRequest $request) {
        DB::beginTransaction();

        try {
            $validated = $request->validated();

            if($request->hasFile('image')){
                $imagePath = $request->file('image')->store('products', 'public');
                $validated['image'] = $imagePath;
            }
            
            $product = Product::create([
                'name' => $validated['name'],
                'description' => $validated['description'],
                'price' => $validated['price'],
                'weight' => $validated['weight'],
                'stock' => $validated['stock'],
                'min_stock' => $validated['min_stock'],
                'is_active' => $validated['is_active'],
                'product_category_id' => $validated['product_category_id'],
            ]);

            ProductImage::create([
                'product_id' => $product->id,
                'image' => $validated['image']
            ]);

            DB::commit();

            return redirect()
                    ->route('products.index')
                    ->with('success', 'Produk '. $product->name .' berhasil ditambahkan');

        } catch (Exception $e) {
            DB::rollback();

            return redirect()
                    ->back()
                    ->withInput()
                    ->with('fail', 'Produk gagal ditambahkan');
        }
    }

    public function show (Product $product) {
        return view('admin.products.show', compact('product'));
    }

    public function edit (Product $product) {
        $categories = ProductCategory::select('id','name')->get();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update (UpdateProductRequest $request, Product $product) {
        DB::beginTransaction();

        try {
            $validated = $request->validated();
            
            $product->update($validated);
            
            DB::commit();

            return redirect()
                    ->route('products.index')
                    ->with('success', 'Produk '. $product->name . ' berhasil diperbarui');
        } catch (Exception $e) {
           DB::rollback();

           return redirect()
                    ->back()
                    ->withInput()
                    ->with('failed', 'Produk '. $product->name . ' gagal diperbarui');
        }
    }

    public function destroy(Product $product) {
        DB::beginTransaction();

        try {
            $productName = $product->name;

            $productImage = ProductImage::where('product_id', $product->id)->get();

            Storage::Disk('public')->delete($productImage->pluck('image'));

            $product->delete();

            DB::commit();

            return redirect()
                    ->route('products.index')
                    ->with('success', 'Produk '. $productName. ' berhasil dihapus');
        } catch (Exception $e) {
            DB::rollback();
            return redirect()
                    ->back()
                    ->with('error', 'Produk '. $productName. ' gagal dihapus Error:'.$e->getMessage());
        }
    }
}
