<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Extension\Validate;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('category.index', ['categories' => $categories]);
    }

    public function create() {
        return view('category.create');
    }

    public function store(Request $request) {
        $category = new Category;
        $validate = new Validate;
        $errors =  $validate->validateCategory($request);
        if(!empty($errors)){
            return view('category.create', ['errors' => $errors]);
        }
        $category->name = $request->name;
        $category->save();
        return view('category.complete');
    }

    public function edit(Request $request, $id) {
        $category = Category::find($id);
        return view('category.edit', ['category' => $category]);
    }

    public function confirm(Request $request, $id) {
        $category = Category::find($id);
        return view('category.confirm', ['category' => $category]);
    }

    public function delete(Request $request) {
        Category::destroy($request->id);
        return view('category.complete');
    }
}
