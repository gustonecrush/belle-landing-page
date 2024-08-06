<?php

namespace App\Http\Controllers;

use App\Models\BahanMentah;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\PaketUmrah;
use App\Models\HotelMekah;
use App\Models\HotelMadinah;
use App\Models\Pesawat;
use App\Models\Supplier;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with(['products'])->get();

        return view('categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $data = $request->all();
        $data['id_admin'] = Auth::guard('admin')->user()->id;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('category_images', 'public');
            $data['image'] = $path;
        }

        Category::create($data);


        return redirect()->route('admin.categories')->with('success', 'Category created successfully.');
    }
    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'file_foto_produk' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $category = Category::findOrFail($request->id);
        $category->nama = $request->nama;
        $category->save();

        return redirect()->route('admin.categories')->with('success', 'Category updated successfully!');
    }


    public function destroy(Request $request)
    {
        $category = Category::where('id', '=', $request->id)->first();
        $category->delete();
        return redirect()->route('admin.categories')->with('success', 'Category deleted successfully.');
    }
}
