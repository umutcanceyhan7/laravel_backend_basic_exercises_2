<?php

namespace App\Http\Controllers;

use App\Models\Possessor;
use Illuminate\Http\Request;

class PossessorController extends Controller
{
    //
    public function index(){
        $d['possessors'] = Possessor::get();
        return view('front/pages/possessors', $d);
    }
}
