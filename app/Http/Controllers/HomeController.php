<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;



class HomeController extends Controller
{
    public function index()
    {

        $string = "Good Afternoon";

        return view("welcome", [
            "greeting" => $string,
        ]);
    }
}
