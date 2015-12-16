<?php

namespace Birdwatcher;

use Illuminate\Database\Eloquent\Model;

class Bird extends Model
{
  public function locations()
  {
      # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
      return $this->belongsToMany('\Birdwatcher\Location')->withTimestamps();;
  }
    public function rarities() {
        return $this->belongsToMany('\Birdwatcher\Rarity');
  }
}
