<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use DateTime;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $dateTime = new DateTime();

        $trains = Train::all();

        // $trains = Train::where('departure_time', '>=', $dateTime->format('Y-m-d H:i:s'))->get();

        return view('index', compact('trains'));
    }
}
