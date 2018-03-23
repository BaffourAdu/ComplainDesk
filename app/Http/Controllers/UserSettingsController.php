<?php

namespace ComplainDesk\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ComplainDesk\User;

class UserSettingsController extends Controller
{
    //
    public function index()
    {
        //$tickets = Ticket::paginate(10);
        //$categories = Category::all();
        $oldTelephone = Auth::user()->telephone;

        return view('settings', compact('oldTelephone'));
    }

    public function updateTelephone(Request $request)
    {
        $this->validate($request, [
            'telephone'     => 'required|max:10',
        ]);

        $user = User::find(Auth::user()->id);

        $user->telephone = $request->input('telephone');

        $user->save();

        return redirect()->back()->with("status", "Your Telephone Number has been submitted.");
    }
}
