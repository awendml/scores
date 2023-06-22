<?php

// app/Http/Controllers/ClubController.php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
        $clubs = Club::all();

        return view('clubs.index', compact('clubs'));
    }

    public function create()
    {
        return view('clubs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:clubs',
            'city' => 'required',
        ]);

        Club::create($request->all());

        return redirect()->route('clubs.index');
    }
}
