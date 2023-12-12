<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ParticipantsController extends Controller
{
    public function index()
    {
        $participants = User::all();
        return view('participants', ['participants' => $participants]);
    }




    public function create()
    {
        return view('participants.create');
    }

    public function store(Request $request)
    {
        
        User::create($request->all());

        return redirect()->route('participants.index')->with('success', 'Учасник успішно доданий.');
    }

    public function show($id)
    {
        $participant = User::findOrFail($id);
        return view('participants.show', ['participant' => $participant]);
    }

    public function edit($id)
    {
        $participant = User::findOrFail($id);
        return view('edit-profile', ['participant' => $participant]);
    }

    public function update(Request $request, $id)
    {
       
        $participant = User::findOrFail($id);
        $participant->update($request->all());

        return redirect()->route('participants.index')->with('success', 'Інформацію про учасника успішно оновлено.');
    }

    public function destroy($id)
    {
    
        $participant = User::findOrFail($id);
        $participant->delete();

        return redirect()->route('participants.index')->with('success', 'Учасник успішно видалений.');
    }
}
