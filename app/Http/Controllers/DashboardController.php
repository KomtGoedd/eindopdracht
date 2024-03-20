<?php

namespace App\Http\Controllers;

use App\Models\Ride;

class DashboardController extends Controller
{
    public function index()
    {
        $rides = Ride::all();
        return view('dashboard', compact('rides'));
    }
}
