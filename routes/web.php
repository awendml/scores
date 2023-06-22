<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\StandingsController;
use App\Models\Club;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[ClubController::class,'index'])->name('clubs.index');

Route::get('clubs/create', [ClubController::class, 'create'])->name('clubs.create');
Route::post('clubs', [ClubController::class, 'store'])->name('clubs.store');

Route::get('matches/create', [MatchController::class, 'create'])->name('matches.create');
Route::post('matches', [MatchController::class, 'store'])->name('matches.store');

Route::get('klasemen', function () {
    $clubs = Club::orderBy('points', 'desc')->get();

    return view('klasemen', compact('clubs'));
})->name('klasemen');

