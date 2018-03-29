<?php

namespace ComplainDesk\Http\Controllers;

use Illuminate\Http\Request;
use ComplainDesk\Http\Controllers\Controller;
use ComplainDesk\Category;
use ComplainDesk\Http\Controllers\LogsController as Log;
use Illuminate\Support\Facades\Auth;

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
    public function store(Log $log, Request $request)
    {
        $this->validate($request, [
                'name'   => 'required'
            ]);

        $category = new Category([
                'name'     => $request->input('name'),
            ]);

        $action = "Created New Category";
        $description = "Category ". $category->name . " has been Created";
        $userId = Auth::user()->id;
            
        $category->save();

        $log->store($action, $description, $userId);
    
        return redirect()->back()->with("status", "$category->name Category has been created.");
    }

    //Method to detele Category
    public function delete(Log $log, $id)
    {
        $category = Category::where('id', $id)->firstOrFail();

        $action = "Deleted Category";
        $description = "Category ". $category->name . " has been Deleted";
        $userId = Auth::user()->id;
    
        $category->delete();

        $log->store($action, $description, $userId);

        return redirect()->back()->with("status", "Category Deleted.");
    }
}
