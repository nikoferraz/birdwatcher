<?php

namespace Birdwatcher\Http\Controllers;

use Illuminate\Http\Request;

use Birdwatcher\Http\Requests;
use Birdwatcher\Http\Controllers\Controller;

class BirdController extends Controller
{
  public function getCreate(Request $request)
  {
    $rarityModel = new \Birdwatcher\Rarity();
    $rarity_for_dropdown = $rarityModel->getRarityForDropdown();
    return view('birds.create')->with('rarity_for_dropdown',$rarity_for_dropdown);
  }
}




       