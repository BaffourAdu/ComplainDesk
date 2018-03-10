<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoriesController extends Controller
{
    //use App\Comment;

    //Method to Show the Create New Category Vew
    public function create()
    {
        $categories = Category::all();

        return view('category', compact('categories'));
    }

    //Method to Store the Category Created
    public function store(Request $request)
    {
            $this->validate($request, [
                'name'   => 'required'
            ]);

            $category = new Category([
                'name'     => $request->input('name'),
            ]);

            $category->save();
    
            return redirect()->back()->with("status", "$category->name Category has been created.");
    }

    //Method to detele Category
    public function delete($id)
    {
        $category = Category::where('id', $id)->firstOrFail();
    
        $category->delete();

        return redirect()->back()->with("status", "Category Deleted.");
    }
}
