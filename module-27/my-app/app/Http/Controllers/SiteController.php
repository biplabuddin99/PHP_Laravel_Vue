<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SiteController extends Controller
{
    function HomePage()
    {
        // Model
        // Database
        // SEO
        // Business Logic
        // External API Call
        return Inertia::render('HomePage');
    }


    function ProfilePage()
    {
        return Inertia::render('ProfilePage');
    }
}
