<?php

namespace Birdwatcher\Http\Controllers;

use Illuminate\Http\Request;

use Birdwatcher\Http\Requests;
use Birdwatcher\Http\Controllers\Controller;

class BirdController extends Controller
{

  /*public function getIndex(Request $request)
  {
    //$rarityModel = new \Birdwatcher\Rarity();
    return view('birds.index');
  }*/
   public function getIndex(Request $request) {

        // Get all the books "owned" by the current logged in users
        // Sort in descending order by id
        $birds = \Birdwatcher\Bird::where('bird_id','=',\Auth::id())->orderBy('id','DESC')->get();

        return view('birds.index')->with('birds',$birds);
    }


  public function getCreate(Request $request)
  {
    if(!\Auth::check() ) {
        \Session::flash('flash_message','You have to be logged in to create a new bird');
        return redirect('/');
    }
    $rarityModel = new \Birdwatcher\Rarity();
    $rarity_for_dropdown = $rarityModel->getRarityForDropdown();
    return view('birds.create')->with('rarity_for_dropdown',$rarity_for_dropdown);
  }
  public function postCreate(Request $request) 
  {

    $this->validate($request,
      [
        'name' => 'required|min:5',
        'image' => 'required|url',
        'scientific_name' => 'required|min:5',
        'natural_habitat' => 'required',
        'description' => 'required',
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
    $bird->rarity_id = $request->rarity_id;
    $bird->save();
    \Session::flash('flash_message','Your entry was added successfully!');
    return redirect('/birds');

  }

   public function getEdit($id = null) {

        # Get this bird and eager load its tags
        $bird = \Birdwatcher\Bird::with('rarity_id')->find($id);

        if(is_null($bird)) {
            \Session::flash('flash_message','bird not found.');
            return redirect('\birds');
    }

        # Get all the possible authors so we can build the authors dropdown in the view
        $raritiesModel = new \Birdwatcher\Rarity();
        $authors_for_dropdown = $authorModel->getAuthorsForDropdown();

        return view('birds.edit')
            ->with([
                'bird' => $bird,
                'rarities_for_dropdown' => $rarities_for_dropdown,
            ]);

    }
}




       