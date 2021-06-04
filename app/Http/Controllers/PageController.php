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
    public function check1()
    {

        $data = [
            'body' => '',
        ];

        return view("pages.check1", $data);
    } 
    public function check2()
    {

        $data = [
            'body' => '',
        ];

        return view("pages.check2", $data);
    }
    public function accept()
    {

        $data = [
            'body' => '',
        ];

        return view("pages.accept", $data);
    }     

    

}
