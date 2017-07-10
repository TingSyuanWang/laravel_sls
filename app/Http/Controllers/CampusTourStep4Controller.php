<?php

namespace App\Http\Controllers;

use App\CampusTour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

class CampusTourStep4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $date = Session::get('getDate');

        $campusTourFormData = Session::get('campusTourFormData');

        return view('campusTour.step4', compact('campusTourFormData', 'date'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campustour = $request->all();

        $uuid1 = Uuid::uuid1()->toString();

        $campustour['uuid'] = $uuid1;

        CampusTour::create($campustour);

        $name = $request->input('name');
        $campustourDate = $request->input('campustourdate');

        Mail::send('emails.campustourFinish', ['name' => $name, 'campustourDate' => $campustourDate], function($message) use($request)
        {
            $message->to($request->email)->subject('【溫馨提醒】亞洲大學服務學習組-校園導覽預約預約成功！');
        });

        return redirect('/campustour/finish');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
