<?php

namespace ComplainDesk\Http\Controllers;

use Illuminate\Http\Request;
use ComplainDesk\User;

class AdminController extends Controller
{
    //
    public function create()
    {
        $categories = Category::all();

        return view('category', compact('categories'));
    }
    public function adminUserStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'telephone' => 'required|max:10',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        
        if ($request->input('password') == $request->input('password_confirmation')) {
            $admin = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'telephone' => $request->input('telephone'),
                'password' => bcrypt($request->input('password')),
                'is_admin' => 1
            ]);
        }


        $admin->save();

        return redirect()->back()->with("status", "$admin->name has been created as an Admin.");
    }

    public function adminUserCreate()
    {
        $admins = User::all()->where('is_admin', 1);

        return view('admin-users', compact('admins'));
    }

    //Method to detele Category
    public function delete($id)
    {
        $admin = User::where('id', $id)->firstOrFail();
    
        $admin->delete();

        return redirect()->back()->with("status", "Admin Deleted.");
    }
}
