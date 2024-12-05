<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Confrence;

class ConferenceController extends Controller
{
    public function index() {

        $confrences = Confrence::all();
        return view('home.index', compact('confrences'));
    }
    public function view($id) {

        $confrence = Confrence::findOrFail($id);
        return view('home.view', ['confrence' => $confrence]);
    }
    public function create() {
        return view('home.create');
    }
    public function store(Request $request) {

        $validated = $request->validate([
            'title' => 'required|max:255',
            'text' => 'required|max:1000',
            'date' => 'required',
            'adress' => 'required|max:255',
            'participant_number' => 'required|min:0',
        ]);
        Confrence::create($validated);
        return redirect()->route('home.index');
    }

    public function edit($id)
    {
        $confrence = Confrence::findOrFail($id);
        return view('home.edit', ['confrence' => $confrence]);
    }

    public function update(Request $request, $id) {

        $validated = $request->validate([
            'title' => 'required|max:255',
            'text' => 'required|max:1000',
            'date' => 'required',
            'adress' => 'required|max:255',
            'participant_number' => 'required|min:0',
        ]);
        $confrence = Confrence::findOrFail($id);
        $confrence->update($request->all());
        return redirect()->route('home.index');
    }

    public function destroy($id) {
        $confrence = Confrence::findOrFail($id);
        $confrence->delete();

        return redirect()->route('home.index');
    }


}
