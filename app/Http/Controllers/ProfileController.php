<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Mision;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $visions = Content::where('key', 'vision')->get();
        $missions = Mision::all();
        $goals = Content::where('key', 'goal')->get();
        $structures = Content::where('key', 'organizational')->first();
        return view('pages.profile', compact('missions', 'visions', 'goals', 'structures'));
    }
}
