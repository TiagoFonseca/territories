<?php

namespace App\Http\Controllers;

use DB;
use App\Map;
use App\Street;

use App\Slip;
use App\User;
use App\Assignment;
use App\House;

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
    public function store(MapRequest $request, $id)
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

      $maps = Map::all();

       $map = $request->find($id);
       $mapName = $map->name;

      //  $users = User::all();

      //  $houses = House::all();

      //  $assignments = Assignment::all();

        $slips = Slip::all();

       $streets = Street::all();

/* checking if there is a territory that is still being worked on */
      //  $ass_terr = $assignments->where('map_id', $id)
      //                         ->where('finished_on', Null)
      //                         ->first();

/* if there is a territory that is still being worked on we are going to look for the publisher's name */
      // if($ass_terr){
      //   $user_id = $ass_terr->user_id;
      //   $username = $users->where('id', $user_id)
      //                     ->first();

/* if the name exists we will populate the variable, otherwise we will send it empty */
      //   $name = $username->name;
      // } else {
      //   $name="";
      // }

/* looking for the slips assigned to that territory */
      // $listSlips = $slips->where('map_id', $id);

/* looking for the streets assigned to that territory */

/* Group our collection by Street ID */
      $assignedSlips = $map->houses->groupBy('slip_id');

      if (!$assignedSlips->isEmpty()) {


      //  echo $assignedSlips;
        // $uniqueSlip = $uniqueSlip->unique('slip_id');
        $data = array();
        foreach ($assignedSlips as $slip) {
          $uniqueSlip = $slip->unique('slip_id')->all();
          $uniqueSlipId = $uniqueSlip[0]['slip_id'];
          $slipName = $slips->find($uniqueSlipId)->name;

        //  $myData['slip'][] =  $slipName;
          //$myData=array();
        //  $mySlip=array( 'Slip name' => $slipName);
        //  array_push($myData, $mySlip);

          $assignedHouses = $map->houses->where('slip_id', $uniqueSlipId)->groupBy('street_id');

          foreach ($assignedHouses as $house) {

    /* Get a unique list of Street Ids so that later we can get the names*/
            $uniqueStreet = $house->unique('street_id')->where('slip_id', $uniqueSlipId);

                foreach ($uniqueStreet as $str) {
                    $streetName = $streets->find($str->street_id)->name;

                  //  $myStreet[$slipName]['street'] = $streetName;
                  //$myData['slip'][$slipName]['street'][]=array('name' => $streetName);
                  //array_push($myData, $myStreet);


                }

                foreach ($house as $test) {
                   //$myHouse[$slipName][$streetName]['house'] = $test->number;
                  $houseNumber = $test->number;
                  $myData['slip'][$slipName]['street'][$streetName]['house'][ ] = $houseNumber;
                  //array_push($myData, $myHouse);
                  }
               }
         }
         return view('maps.show', compact('mapName','myData'));
       } else {
        return view('maps.show_error');
      }




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
