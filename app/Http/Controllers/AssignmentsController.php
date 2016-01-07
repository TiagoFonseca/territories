<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\User;
use App\Territory;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Http\Requests\AssignmentRequest;

class AssignmentsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth', ['except' => 'index, show']);
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //
      $assignments = Assignment::all();


      return view('assignments.index', compact('assignments'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {

      $users = \DB::table('users')->lists('name', 'id');
      $maps = \DB::table('maps')->lists('name', 'id');

      return view('assignments.create', compact('users', 'maps'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(AssignmentRequest $request)
  {
       //only continues below if validation doesn't fail

      //dd($request->input('map_id')); 
      Assignment::create($request->all());

      return redirect('assignments')->with('message', 'The assignment has been created!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Assignment $request, $id)
  {
      $assignment = $request->find($id);

      // return $map_user;

      return view('territories/assignments.show', compact('assignment'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $assignment = Assignment::find($id);

    $users = \DB::table('users')->lists('name', 'id');
    $maps = \DB::table('maps')->lists('name', 'id');

    return view('assignments.edit', compact('assignment', 'users', 'maps'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(AssignmentRequest $request, $id)
  {
    $assignment = Assignment::find($id);

    $assignment->update($request->all());

    return redirect('assignments');
}

public function finished()
{
    //
    $assignments = Assignment::finished()->get();


    return view('assignments.index', compact('assignments'));
}


public function unfinished()
{
    //
    $assignments = Assignment::unfinished()->get();


    return view('assignments.index', compact('assignments'));
}


  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Assignment $assignment)
  {
      $assignment->destroy($request->all());
  }
}
