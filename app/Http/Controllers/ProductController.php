<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
 
    public function index()
    {
        $products = Product::latest()->paginate(5);

        return view('Product.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $categories = Category::all();
        return view('product.add', compact(['categories']));
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('foto')) {
            $validasi['foto'] = $request->file('foto')->store('gambar');
        }

        Product::create($validasi);
        return redirect('/product')
            ->with('success', 'Product created successfully.');
    }

    public function show(Product $id)
    {
        return view('product.show',[
            'product' => $id,
        ]);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('product.edit',compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'foto' => [File::types(['jpg', 'jpeg', 'png', 'gif'])->max(2 * 1024)],
        ]);

        $data = Product::find($id);
        $data->name = $request->name;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->category_id = $request->category_id;
        if ($request->file('foto')) {
            Storage::delete($data->foto);
            $data->foto = Storage::putFile('gambar', $request->file('foto'));
        }
        $data->save();
        return redirect('/product')
                        ->with('success','Product updated successfully');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/product');
    }
    
    public function addcart($id)
    {
        $data = Product::all($id);
        return view('/layout/admin', $data);
    }
}

