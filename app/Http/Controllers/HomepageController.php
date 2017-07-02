<?php

namespace App\Http\Controllers;

use App\Ambassador;
use App\CampusTour;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
    public function index()
    {
        $campustourCount = New CampusTour;

        $campustourCounts = $campustourCount->orderBy('created_at', 'desc')->first();

        $ambassadorCount = New Ambassador;

        $ambassadorCounts = $ambassadorCount->orderBy('created_at', 'desc')->first();


        return view('homepage', compact('campustourCounts', 'ambassadorCounts'));
    }
}
