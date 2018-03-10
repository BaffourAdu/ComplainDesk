<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserSettingsController extends Controller
{
    //
    public function index()
    {
        //$tickets = Ticket::paginate(10);
        //$categories = Category::all();
        $oldTelephone = Auth::user()->telephone;

        $user = User::find(Auth::user()->id);

        $user->email = 'john@foo.com';

        $user->save();

        return view('settings', compact('oldTelephone'));
    }

    public function updateTelephone()
    {

    }

    public function changePassword()
    {
        //$tickets = Ticket::paginate(10);
        //$categories = Category::all();
        $oldTelephone = Auth::user()->telephone;

        return view('settings', compact('oldTelephone'));
    }
}
