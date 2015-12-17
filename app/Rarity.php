<?php

namespace Birdwatcher;

use Illuminate\Database\Eloquent\Model;

class Rarity extends Model
{
  public function birds() 
  {
    return $this->hasMany('\Birdwatcher\Bird');
  }
  public function getRarityForDropdown() 
  {

    $rarities = $this->orderby('id','ASC')->get();
    $rarity_for_dropdown = [];
    foreach($rarities as $rarity) {
        $rarity_for_dropdown[$rarity->id] = $rarity->rarity.' ('.$rarity->rarity_acronym.')';
    }

    return $rarity_for_dropdown;

  }
}
