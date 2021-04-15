<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;

class heroControler extends Controller
{
    function addHero(Request $req){
        $hero = new Hero;
        $hero->name = $req->name;
        $hero->ability = $req->ability;
        $hero->description = $req->description;
        $hero->image = $req->file('image')->store('upload', 'public');
        $hero->save();
        return redirect('/addHeroes');
    }
    function getHero(){
      // $data = Hero::orderBy('created_at')->get();
       $data = Hero::paginate(3);
       return view('welcome',['heroes'=>$data]);
    }
}