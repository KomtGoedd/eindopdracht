<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ride;

class DashboardController extends Controller
{
    public function index()
    {
        // Haal alle ritten op uit de database
        $rides = Ride::all();

        return view('dashboard', compact('rides'));
    }
}
