<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScrabbleController extends Controller
{
    //Home page with the form
    public function scrabble(){
        return view('scrabble');
    }

    //Home page with both form and the score from previous submission
    public function calculate(){
        return view('calculate');
    }

}
