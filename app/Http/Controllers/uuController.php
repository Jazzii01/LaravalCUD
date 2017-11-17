<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uuController extends Controller
{
  
    function about()
    {
      return View('about');
    }

}
