<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::latest()->paginate(5);

        return view('category.index', compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('category.add');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->file('foto')) {
            $validasi['foto'] = $request->file('foto')->store('gambar');
    }

        Category::create($validasi);
        return redirect('/category')
            ->with('success', 'Category created successfully.');
    }

    // public function show(Category $category)
    // {
    //     return view('categori.show', compact('category'));
    // }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', compact(['category']));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'foto' => [File::types(['jpg', 'jpeg', 'png', 'gif'])->max(2 * 1024)],
        ]);

        $data = Category::find($id);
        $data->name = $request->name;
        $data->description = $request->description;
        if ($request->file('foto')) {
            Storage::delete($data->foto);
            $data->foto = Storage::putFile('gambar', $request->file('foto'));
        }
        $data->save();
        return redirect('/category')
            ->with('success', 'Category updated successfully');
    }

    public function destroy($category)
    {
        Category::find($category)->delete();

        return redirect('/category')
            ->with('success', 'category deleted successfully');
    }
}
