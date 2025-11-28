<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Exception;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_categories = ProductCategory::all();
        return view('admin.categories.index', compact('product_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductCategoryRequest $request)
    {
        DB::beginTransaction();

        try {
            $validated = $request->validated();

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('product_categories', 'public');
                $validated['image'] = $imagePath;
            }

            $productCategory = ProductCategory::create($validated);

            DB::commit();

            return redirect()
                    ->route('product_categories.index')
                    ->with('success', 'Kategori '. $productCategory->name .' berhasil ditambahkan');
        } catch (Exception $e) {
            DB::rollback();
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Gagal membuat produk. Error: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductCategory $productCategory)
    {   
        return view('admin.categories.show', compact('productCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductCategory $productCategory)
    {
        return view('admin.categories.edit', compact('productCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory)
    {
        DB::beginTransaction();

        try {
            $validated = $request->validated();

            if ($request->hasFile('image')) {
                Storage::disk('public')->delete($productCategory->image);
                $newImagePath = $request->file('image')->store('product_categories', 'public');
                $validated['image'] = $newImagePath;
            }

            $productCategory->update($validated);

            DB::commit();

            return redirect()
                    ->route('product_categories.index')
                    ->with('success', 'Kategori produk berhasil diperbarui');
        } catch (Exception $e) {
            DB::rollback();
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Gagal memperbarui kategori produk. Error: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductCategory $productCategory )
    {
        DB::beginTransaction();

        try {
            $categoryName = $productCategory->name;
            $categoryImage = $productCategory->image;

            Storage::Disk('public')->delete($categoryImage);

            $productCategory->delete();

            DB::commit();

            return redirect()
                    ->route('product_categories.index')
                    ->with('success', 'Kategori '. $categoryName. ' berhasil dihapus');
        } catch (Exception $e) {
            DB::rollback();

            return redirect()
                    ->back()
                    ->with('error', 'Kategori '. $categoryName. ' gagal dihapus Error:'.$e->getMessage());
        }
    }
}
