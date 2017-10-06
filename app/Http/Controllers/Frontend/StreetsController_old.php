<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

use App\Street;
use App\User;
use App\Map;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Http\Requests\StreetRequest;

class StreetsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $streets = Street::all();

      return view('streets.index', compact('streets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //  $maps = \DB::table('maps')->lists('name', 'id');

      $streets = Street::all();
      return view('streets.create', compact('streets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StreetRequest $request)
    {
      Street::create($request->all());

      return redirect('streets')->with('message', 'The street has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Street $request, $id)
    {
      $street = $request->find($id);

    //  $house = \DB::table('houses')->lists('number', 'id');

      /* getting all the houses with this street id */

       $ass_houses = \DB::table('houses')->where('street_id', $id)->get();
       //dd($ass_houses);
      // return $map_user;

      return view('streets.show', compact('street', 'ass_houses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $street = Street::find($id);

        $maps = \DB::table('maps')->lists('name', 'id');

        return view('streets.edit', compact('street', 'maps'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StreetRequest $request, $id)
    {
      $street = Street::find($id);

      $street->update($request->all());

      return redirect('streets');
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
