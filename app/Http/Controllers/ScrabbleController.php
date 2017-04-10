<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScrabbleController extends Controller
{
    //Home page with the form, I made everything null to not cause an error on first load
    public function scrabble(){
        return view('scrabble')->with([
            'score' => null,
            'word' => null,
            'bonus' => null,
            'bingo' => null
        ]);
    }

    //Home page with both form and the score from previous submission, all inputs are saved
    public function calculate(Request $request){

        //Validate the word, scrabble words only has up to 15 characters
        $this->validate($request, [
            'word' => 'required|alpha|max:15',
        ]);
        //Initialize score
        $score = 0;

        //Pull the request
        $word = strtolower($request->input('word', null));
        $bonus = $request->input('bonus','none');
        $bingo = $request->input('bingo', false);

        //Calculate word score
        for ($i = 0; $i < strlen($word); $i++){
            $char = $word[$i];
            if (strrchr('aeilnortsu',$char) != false){
                $score += 1;
            } else if (strrchr('dg',$char) != false){
                $score += 2;
            } else if (strrchr('bcmp',$char) != false){
                $score += 3;
            } else if (strrchr('fhvwy',$char) != false){
                $score += 4;
            } else if (strrchr('k',$char) != false){
                $score += 5;
            } else if (strrchr('jx',$char) != false){
                $score += 8;
            } else if (strrchr('qz',$char) != false){
                $score += 10;
            }
        }

        //Check for double or triple
        if ($bonus == 'double'){
            $score *= 2;
        } else if ($bonus == 'triple'){
            $score *= 3;
        }

        //Check bingo
        if ($bingo == 'true'){
            $score += 50;
        }

        //return everything to view
        return view('calculate')->with([
            'score' => $score,
            'word' => $word,
            'bonus' => $bonus,
            'bingo' => $bingo
        ]);
    }

}
