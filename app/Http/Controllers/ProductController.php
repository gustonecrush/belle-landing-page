<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\HasilProduksi;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('admin', 'category')->get();
        $categories = Category::all(); // Fetch all categories
        return view('products.index', compact('products', 'categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|string|max:255',
            'tanggal_produksi' => 'required|string',
            'stok' => 'required|string',
            'description' => 'required|string',
            'id_category' => 'required',
            'file_foto_produk' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $data = $request->all();
        $data['id_admin'] = Auth::guard('admin')->user()->id;

        if ($request->hasFile('file_foto_produk')) {
            $path = $request->file('file_foto_produk')->store('hasil_produksi_images', 'public');
            $data['file_foto_produk'] = $path;
        }

        Product::create($data);


        return redirect()->route('admin.products')->with('success', 'Product created successfully.');
    }

    public function destroy(Request $request)
    {
        $hasilProduksi = Product::findOrFail($request->id);
        $hasilProduksi->delete();

        return redirect()->route('admin.products')->with('success', 'Product deleted successfully.');
    }
}
