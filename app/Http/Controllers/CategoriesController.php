<?php

namespace ComplainDesk\Http\Controllers;

use Illuminate\Http\Request;
use ComplainDesk\Http\Controllers\Controller;
use ComplainDesk\Category;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Method to Show the Create New Category Vew
    public function create()
    {
        $categories = Category::all();

        return view('category.index', compact('categories'));
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
