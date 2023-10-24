<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', ['products' => $products]);
        
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'jenis barang' => 'required',
            'kondisi barang' => 'required',
            'keterangan barang' => 'required',
            'kecacatan barang' => 'required',
            'jumlah barang' => 'required|numeric',
            'foto' => 'required'
        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'));

    }
}