<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
   public function myfunction(){
      $name = "Lina";
      return view('myview', compact('name'));
   }
}

// url - uniform resource locater 
// representational state transfer aplication programming interface - rest api
// http//localhost:8080/user - GET
// http//localhost:8080/user - POST
// http//localhost:8080/user/id - DELETE
// http//localhost:8080/user/id - UPDATE
// mosh - programming 
// design - gary simon

