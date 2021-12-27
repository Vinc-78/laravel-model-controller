<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Illuminate\Support\Facades\Request as FacadesRequest;

class MovieController extends Controller
{
  
  function index() {

    $daricercare = FacadesRequest::query()["ricerca"] ?? "";

    if($daricercare){
      $dati=Movie::where("title","LIKE","%$daricercare%")->get();
    }
    else {
      $dati=Movie::all();
    }
    
    return view(
      "home",
      [
        "movie"=>$dati,
        "filtro" =>$daricercare
      ]
    );

  }

  
  function old_index() {
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

        #  return $movies; # per avere il json all'avvio della pagina con i dati presi dal db 
 
      return view("home", 
      [ "movie"=>$datifiltrati,
        "filtro" =>$daricercare
      ]
      ); 
 }
}