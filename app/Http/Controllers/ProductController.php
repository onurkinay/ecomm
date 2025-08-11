<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductImage;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->short_description = $request->short_description;
        $product->qty = $request->qty;
        $product->sku = $request->sku;
        $product->description = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('', 'public');
            $product->image = $imagePath;
        }

        $product->save();

        // insert colors
        if ($request->has('colors') && $request->filled('colors')) {
            foreach ($request->colors as $color) {
                ProductColor::create([
                    'product_id' => $product->id,
                    'name' => $color,
                ]);
            }
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $fileName = $image->store('', 'public');
                $filePath = 'uploads/'.$fileName;
                ProductImage::create([
                    'product_id' => $product->id,
                    'path' => $filePath,
                ]);
            }
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::with(['colors', 'images'])->findOrFail($id);
        $colors = $product->colors->pluck('name')->toArray();

        return view('admin.product.edit', compact('product', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductUpdateRequest $request, string $id)
    {
        $product = Product::findOrFail($id);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->short_description = $request->short_description;
        $product->qty = $request->qty;
        $product->sku = $request->sku;
        $product->description = $request->description;

        if ($request->hasFile('image')) {
            File::delete(public_path($product->image));
            $imagePath = $request->file('image')->store('', 'public');
            $product->image = $imagePath;
        }

        $product->save();

        // insert colors
        if ($request->has('colors') && $request->filled('colors')) {
            // Delete existing colors
            ProductColor::where('product_id', $product->id)->delete();

            foreach ($request->colors as $color) {
                ProductColor::create([
                    'product_id' => $product->id,
                    'name' => $color,
                ]);
            }
        }

        if ($request->hasFile('images')) {
            // Delete existing images
            foreach ($product->images as $existingImage) {
                File::delete(public_path($existingImage->path));

            }
            $product->images()->delete();

            foreach ($request->file('images') as $image) {
                $fileName = $image->store('', 'public');
                $filePath = 'uploads/'.$fileName;
                ProductImage::create([
                    'product_id' => $product->id,
                    'path' => $filePath,
                ]);
            }
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        // Delete product image
        File::delete(public_path($product->image));

        // Delete product colors
        $product->colors()->delete();

        // Delete product images
        foreach ($product->images as $existingImage) {
            File::delete(public_path($existingImage->path));
        }
        $product->images()->delete();

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
