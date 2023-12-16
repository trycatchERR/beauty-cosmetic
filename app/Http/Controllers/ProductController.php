<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productsView()
    {
        $products = Product::limit(8)->get();
        return view('products', [
            'products' => $products
        ]);
    }

    public function createView()
    {
        return view('product_create');
    }

    public function create(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string',
        //     'description' => 'string',
        //     'price' => 'required|numeric',
        //     'stock' => 'required|numeric',
        //     'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        // ]);

        $image = ImageController::save($request);

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => (int) $request->price,
            'image' => $image,
        ]);

        return back()->with('success', 'Product created successfully!');
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required|string',
        //     'description' => 'string',
        //     'price' => 'required|numeric',
        //     'stock' => 'required|numeric',
        //     'image' => 'image|mimes:jpeg,png,jpg|max:2048'
        // ]);

        if ($request->image) {
            $image = ImageController::save($request);
        } else {
            $image = Product::where('id', $id)->first()->image;
        }

        Product::where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => (int) $request->price,
            'image' => $image
        ]);

        return back()->with('success', 'Product updated successfully!');
    }

    public function delete($id)
    {
        Product::where('id', $id)->delete();

        return back()->with('success', 'Product deleted successfully!');
    }
}
