<?php

namespace App\Http\Controllers;

use App\Models\GalleriesCategory;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        // Ambil semua kategori
        $categories = GalleriesCategory::all();

        $galleries = Gallery::with('category')->get();

        return view('pages.galleries', compact('galleries', 'categories'));
    }
}
