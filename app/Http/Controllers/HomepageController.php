<?php

namespace App\Http\Controllers;

use App\CampusTour;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
    public function index()
    {
        $campustourcount = New CampusTour;

        $campustourcounts = $campustourcount->orderBy('created_at', 'desc')->first();

//        return dd($campustourcounts['id']);

        return view('homepage', compact('campustourcounts'));
    }
}
