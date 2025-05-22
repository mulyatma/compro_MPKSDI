<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Content;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::all();

        $keys = [
            'contact_email',
            'contact_phone',
            'contact_youtube',
            'contact_facebook',
            'contact_instagram',
            'contact_whatsapp',
        ];

        $contacts = Content::whereIn('key', $keys)->get()->keyBy('key');

        return view('pages.home', compact('aboutUs', 'contacts',));
    }
}
