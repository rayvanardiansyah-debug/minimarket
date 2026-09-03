<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Mengambil semua data produk dari database
        $products = Product::all();

        // Mengirim data ke view 'products.index'
        return view('products.index', compact('products'));
    }
}
