<?php

namespace Birdwatcher\Http\Controllers;

use Illuminate\Http\Request;

use Birdwatcher\Http\Requests;
use Birdwatcher\Http\Controllers\Controller;

class BirdController extends Controller
{
  public function getCreate()
  {
    return view('birds.create'); 
  }
}
/*

    Route::get('/birds/create', 'BirdController@getCreate');
    Route::post('/birds/create', 'BirdController@postCreate');

    Route::get('/birds/edit/{id?}', 'BirdController@getEdit');
    Route::post('/birds/edit', 'BirdController@postEdit');