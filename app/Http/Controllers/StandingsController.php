<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class StandingsController extends Controller
{
    public function index()
    {
        $clubs = Club::orderBy('points', 'desc')
            ->orderBy('goals_for', 'desc')
            ->orderBy('goals_against')
            ->orderBy('name')
            ->get();

        return view('standings.index', compact('clubs'));
    }
}
