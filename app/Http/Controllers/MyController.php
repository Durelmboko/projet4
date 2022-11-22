<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        $name ="durel";
        $age = 22;
        $tab =array('name' => "yassir", 'age' =>19);

        return view('myview' , $tab);
    }
}
