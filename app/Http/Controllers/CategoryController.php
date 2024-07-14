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
        ]);

        Category::create($request->all());
        return redirect()->route('admin.categories')->with('success', 'Category created successfully.');
    }
    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
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