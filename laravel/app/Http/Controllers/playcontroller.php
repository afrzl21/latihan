<?php

namespace App\Http\Controllers;

use App\Models\playstation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class playcontroller extends Controller
{
        public function play()
    {
        $playstation = playstation::all();
        return view ('playstation', ['listplaystation' => $playstation]);
    }
}
