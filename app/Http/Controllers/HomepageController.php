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
        $campustourCount = CampusTour::count();

//        $campustourCounts = $campustourCount->orderBy('created_at', 'desc')->first();

        $ambassadorCount = Ambassador::count();

//        $ambassadorCounts = $ambassadorCount->orderBy('created_at', 'desc')->first();

        return view('homepage', compact('campustourCount', 'ambassadorCount'));
    }
}
