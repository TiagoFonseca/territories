<?php

namespace App\Http\Controllers;

use App\Map;
use App\Slip;
use App\User;
use App\Assignment;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Http\Requests\MapRequest;

class MapsController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maps = Map::all();

        return view('maps.index', compact('maps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // $slips = Slip::lists('name', 'name');
      //
      //   return view('maps.create', compact('slips'));

      return view('maps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MapRequest $request)
    {
          //only continues below if validation doesn't fail

          // dd($request->input('slips'));
        Map::create($request->all());

        return redirect('maps')->with('message', 'The map has been created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Map $request, $id)
    {

       $map = $request->find($id);

       $users = User::all();

       $assignments = Assignment::all();

       $ass_terr = $assignments->where('map_id', $id)
                              ->where('finished_on', Null)
                              ->first();
      if($ass_terr){
        $user_id = $ass_terr->user_id;
        $username = $users->where('id', $user_id)
                          ->first();

        $name = $username->name;
      } else {
        $name="";
      }

      return view('maps.show', compact('map', 'name'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $map = Map::find($id);

        return view('maps.edit', compact('map'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MapRequest $request, $id)
    {
       // $map = Map::all();

        $map = Map::find($id);

       // return $map;

       //$map->update($request->all());

        $map->update($request->all());

        //$username = (!$request->input('username') ? [] : $request->input('username'));

        //$assigned_on = (!$request->input('assigned_on') ? [] : $request->input('assigned_on'));

        //$pivotData = array('map_id'=>$id, 'user_id'=>$username);

        // return $pivotData;

        //$map->users()->sync($pivotData);

        return redirect('maps');
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

    public function available()
    {
        //
        //$maps = Map::available()->get();

        $map= Map::all();
        $unavailable = Map::unavailable()->get();
        $maps=$map->diff($unavailable);


        return view('maps.index', compact('maps'));
    }


    public function unavailable()
    {
        //
        $maps = Map::unavailable()->get();

        //return compact('maps');

        return view('maps.index', compact('maps'));
    }

}
