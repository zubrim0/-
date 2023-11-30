<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EditController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('edit-profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'organization_name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
           
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
        ]);

        return redirect()->route('participants.index')->with('success', 'Профіль успішно оновлено.');
    }
}

    }
}