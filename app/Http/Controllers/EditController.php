<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class EditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function index()
    {
        $user = Auth::user();

        return view('edit-profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            
        ]);

        $user->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'gender' => $request->gender,
            'nationality' => $request->nationality,
            'organization_name' => $request->organization_name,
            'position' => $request->position,
            'birthdate' => $request->birthdate,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('participants')->with('success', 'Профіль успішно оновлено.');
    }
}
