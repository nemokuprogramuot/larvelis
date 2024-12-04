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
}
