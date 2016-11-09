<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UriController extends Controller
{
   public function index(Request $request){

        $path = $request->path();
        echo 'Path Method: ' .$path;
        echo '<br>';

        $pattern = $request->is('foo/*');
        echo 'is Method: '.$pattern;
        echo '<br>';

        $url = $request->url();
        echo 'URL method: '.$url;
   }
}
