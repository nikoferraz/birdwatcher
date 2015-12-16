<?php

namespace Birdwatcher;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  public function birds()
  {
    return $this->belongsToMany('\Birdwatcher\Bird')->withTimestamps();;
  }
}
