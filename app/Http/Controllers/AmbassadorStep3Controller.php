<?php

namespace App\Http\Controllers;

use App\Http\Requests\AmbassadorStep3Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AmbassadorStep3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = Session::get('getDate');

        $ambassadorFormData = Session::get('ambassadorFormData');

        return view('ambassador.step3', compact('date', 'ambassadorFormData'));
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
    public function store(AmbassadorStep3Request $request)
    {
        $ambassadorFormData = $request->all();

        Session::put('ambassadorFormData', $ambassadorFormData);

        return redirect()->route('ambassador.step4');
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
