<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    function index() {
        $movies=Movie::all();

        /*  return $movies; */
 
      return view("home", [ "movie"=>$movies]); 
 }
}