<?php

namespace Birdwatcher\Http\Controllers;

use Illuminate\Http\Request;

use Birdwatcher\Http\Requests;
use Birdwatcher\Http\Controllers\Controller;

class BirdController extends Controller
{

  public function getIndex(Request $request)
  {
    //$rarityModel = new \Birdwatcher\Rarity();
    return view('birds.index');
  }

  public function getCreate(Request $request)
  {
    $rarityModel = new \Birdwatcher\Rarity();
    $rarity_for_dropdown = $rarityModel->getRarityForDropdown();
    return view('birds.create')->with('rarity_for_dropdown',$rarity_for_dropdown);
  }
  public function postCreate(Request $request) 
  {
   $this->validate(
        $request,
        [
            'name' => 'required|min:5',
            'image' => 'required|url',
        ]
    ); 

    # Enter bird into the database
    $bird = new \Birdwatcher\Bird();
    $bird->name = $request->name;
    $bird->scientific_name = $request->scientific_name;
    //$bird->user_id = \Auth::id(); # <--- NEW LINE
    $bird->natural_habitat = $request->natural_habitat;
    //$bird->rarity_id = $request->rarity_id;
    $bird->image = $request->image;
    $bird->description = $request->description;
    $bird->save();

    # Add the tags
    if($request->rarities) {
        $rarities = $request->rarities;
    }
    else {
        $rarities = [];
    }
    $bird->rarities()->sync($rarities);

    # Done
    \Session::flash('flash_message','Your bird was added!');
    return redirect('/birds');

  }
}




       