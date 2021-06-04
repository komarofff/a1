<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    
  
    public function request()
    {

        $data = [
            'body' => '',
        ];

        return view("pages.request", $data);
    }

    

    

}
