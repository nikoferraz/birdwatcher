<?php

namespace Birdwatcher\Http\Controllers;

use Illuminate\Http\Request;

use Birdwatcher\Http\Requests;
use Birdwatcher\Http\Controllers\Controller;

class WelcomeController extends Controller {

    /**
    * Responds to requests to GET /
    */
    public function getIndex() {

        if(\Auth::check()) {
            return redirect()->to('/birds');
        }

        return view('welcome.index');
    }

}
