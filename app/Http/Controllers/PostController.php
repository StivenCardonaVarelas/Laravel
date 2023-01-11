<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController 
{
     public function index (){

        $posts =[

            ['title'=> '1 pots'],
            ['title'=> '2 pots'],
            ['title'=> '3 pots'],
            ['title'=> '4 pots'],

        ];  
            return view('blog', ['posts'=>$posts]);


     }
}
