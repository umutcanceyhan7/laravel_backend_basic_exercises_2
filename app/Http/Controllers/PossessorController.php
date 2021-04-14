<?php

namespace App\Http\Controllers;

use App\Models\Possessor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PossessorController extends Controller
{
    //
    public function index()
    {
        $d['possessors'] = Possessor::get();
        return view('front/pages/possessors', $d);
    }
    public function createPossessor()
    {
        return view('front/pages/create-possessor');
    }
    public function createPossessorPost(Request $r)
    {
        // Assign form values to variables
        $possessor_name = $r->possessor_name;
        $possessor_picture = $r->possessor_picture;
        $possessor_age = $r->possessor_age;
        $possessor_score = $r->possessor_score;
        // Store in the database
        $new_possessor = new Possessor;
        $new_possessor->possessor_guid = Str::uuid();
        $new_possessor->name = $possessor_name;
        $new_possessor->picture = $possessor_picture;
        $new_possessor->age = $possessor_age;
        $new_possessor->score = $possessor_score;
        // Save it to database
        $new_possessor->save();
        // Redirect to possessors page
        return redirect()->route('possessors');
    }
}
