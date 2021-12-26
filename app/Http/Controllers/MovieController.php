<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Illuminate\Support\Facades\Request as FacadesRequest;

class MovieController extends Controller
{
    function index() {
        $movies=Movie::all();

        $datifiltrati =[];

        $daricercare = FacadesRequest::query()["ricerca"] ?? "";

        if($daricercare) {
              foreach ($movies as $movie) {
                if(strpos(strtolower($movie['title']), strtolower($daricercare))){

                  $datifiltrati[] = $movie;  
                }
              }
            }
            else {$datifiltrati = $movies;}

        /*  return $movies; */
 
      return view("home", 
      [ "movie"=>$datifiltrati,
        "filtro" =>$daricercare
      ]
      ); 
 }
}