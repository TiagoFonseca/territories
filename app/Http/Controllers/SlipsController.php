<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slip;
use App\User;
use App\Map;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Http\Requests\SlipRequest;

class SlipsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $slips = Slip::all();
      $maps = Map::all();

      return view('slips.index', compact('slips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $maps = \DB::table('maps')->lists('name', 'id');

      $slips = Slip::all();
      return view('slips.create', compact('slips', 'maps'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SlipRequest $request)
    {
      Slip::create($request->all());

      return redirect('slips')->with('message', 'The slip has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Slip $request, $id)
    {
      $slip = $request->find($id);

    //  $house = \DB::table('houses')->lists('number', 'id');

      /* getting all the houses with this slip id */

       $ass_houses = \DB::table('houses')->where('slip_id', $id);

      // return $map_user;

      return view('slips.show', compact('slip', 'ass_houses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slip = Slip::find($id);

        $maps = \DB::table('maps')->lists('name', 'id');

        return view('slips.edit', compact('slip', 'maps'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SlipRequest $request, $id)
    {
      $slip = Slip::find($id);

      $slip->update($request->all());

      return redirect('slips');
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
