<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class AdminController extends Controller
{
    /**
     * Display the Admin Page.
     */
    public function index()
    {
        return Inertia::render('Admin/Index');
    }
}
