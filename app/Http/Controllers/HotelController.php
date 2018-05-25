<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Hotel;


class HotelController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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


    public function show($id)
    {
        //
        $hotel = Hotel::find($id);
        return view('pages.single_hotel',compact('hotel'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HotelController  $hotelController
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HotelController  $hotelController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HotelController  $hotelController
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
