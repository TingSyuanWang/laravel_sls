<?php

namespace App\Http\Controllers;

use App\Ambassador;
use App\CampusTour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search.index');
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
        //
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

    public function CampustourSearch()
    {
        return view('search.campustourSearch');
    }

    public function AmbassadorSearch()
    {
        return view('search.ambassadorSearch');
    }

    public function campustourShow(Request $request)
    {
        $campustourSearchData = $request->all();

        $campustourModelData = DB::table('campus_tours')->where([
            ['phoneNumber', '=', $campustourSearchData['phoneNumber']],
            ['email', '=', $campustourSearchData['email']],
        ])->orderBy('campustourdate', 'desc')->get();

        return view('search.campustourSearchResultList', compact('campustourModelData'));
    }

    public function campustourDetail($uuid)
    {
        $campustourFormData = CampusTour::where('uuid', '=', $uuid)->get()->first();

        return view('search.campustour-more', compact('campustourFormData'));
    }

    public function campustourEdit($uuid)
    {
        $campustourFormData = CampusTour::where('uuid', '=', $uuid)->get()->first();

        return view('search.campustour-edit', compact('campustourFormData'));
    }

    public function campustourUpdate(Request $request, $uuid)
    {
        $campustourFormData = CampusTour::where('uuid', '=', $uuid)->get()->first();

        $input = $request->all();

        $campustourFormData->update($input);

        return redirect('/search/campustour');
    }

    public function campustourDestroy(Request $request)
    {
        $uuid = $request->input( 'uuid' );

        $campustourFormData = CampusTour::where('uuid', '=', $uuid)->get()->first();

        $campustourFormData->delete();
    }

    public function ambassadorShow(Request $request)
    {
        $ambassadorSearchData = $request->all();

        $ambassadorModelData = DB::table('ambassadors')->where([
            ['phoneNumber', '=', $ambassadorSearchData['phoneNumber']],
            ['email', '=', $ambassadorSearchData['email']],
        ])->orderBy('ambassadorDate', 'desc')->get();

        return view('search.ambassadorSearchResultList', compact('ambassadorModelData'));
    }
}
