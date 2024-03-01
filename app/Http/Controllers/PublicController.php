<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {

        $data = Info::all();
        return view('welcome', compact('data'));
    }
}
