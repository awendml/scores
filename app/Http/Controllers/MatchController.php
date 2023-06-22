<?php
// app/Http/Controllers/MatchController.php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Match;
use App\Models\Matchs;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function create()
    {
        $clubs = Club::all();

        return view('matches.create', compact('clubs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'matches' => 'required|array',
            'matches.*.club1' => 'required|distinct',
            'matches.*.club2' => 'required|distinct',
            'matches.*.score1' => 'required|integer',
            'matches.*.score2' => 'required|integer',
        ]);

        foreach ($request->matches as $matchData) {
            $match = new Matchs([
                'club1_id' => $matchData['club1'],
                'club2_id' => $matchData['club2'],
                'score1' => $matchData['score1'],
                'score2' => $matchData['score2'],
            ]);

            $match->save();

            // Update klasemen
            $club1 = Club::find($matchData['club1']);
            $club2 = Club::find($matchData['club2']);

            $club1->goals_for += $matchData['score1'];
            $club1->goals_against += $matchData['score2'];
            $club2->goals_for += $matchData['score2'];
            $club2->goals_against += $matchData['score1'];

            if ($matchData['score1'] > $matchData['score2']) {
                $club1->wins += 1;
                $club1->points += 3;
                $club2->losses += 1;
            } elseif ($matchData['score1'] < $matchData['score2']) {
                $club2->wins += 1;
                $club2->points += 3;
                $club1->losses += 1;
            } else {
                $club1->draws += 1;
                $club1->points += 1;
                $club2->draws += 1;
                $club2->points += 1;
            }

            $club1->save();
            $club2->save();
        }

        return redirect()->route('klasemen');
    }
}
