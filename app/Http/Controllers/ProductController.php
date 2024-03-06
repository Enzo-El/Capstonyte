<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() { 
        $product = product::all();
        return view('/products', compact('product'));
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'product_name' => 'required',
            'quantity' => 'required',
            'price' => 'required'
        ]);

        $product = product::create([
            'product_name' => $request->product_name,
            'quantity' => $request->quantity,
            'price' => $request->price
        ]);

        if ($product) {
            return back()->with('success', 'Product created successfully!');
        }

        return back()->with('error', 'Unable to create Product!');
    }

    public function productupdateview($id) {
        $productUpdate = product::findOrFail($id);
        return view('productsUpdate', compact('productUpdate'));
    }

    public function productupdate(Request $request, int $id) {
        $this->validate($request, [
            'product_name' => 'required',
            'quantity' => 'required',
            'price' => 'required'
        ]);

        product::findOrFail($id)->update([
            'product_name' => $request->product_name,
            'quantity' => $request->quantity,
            'price' => $request->price
        ]);

        return redirect('products');
    }


    public function productdelete(int $id) {
        $productdel = product::findOrFail($id);
            $productdel->delete();
        return redirect()->back()->with('status', 'Product Deleted!');
    }

    public function productsView($id) {
        $productUpdate = product::findOrFail($id);
        return view('productsView', compact('productUpdate'));
    }
}
