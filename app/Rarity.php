<?php

namespace Birdwatcher;

use Illuminate\Database\Eloquent\Model;

class Rarity extends Model
{
  public function birds() {
        return $this->hasMany('\Birdwatcher\Bird');
  }
}
