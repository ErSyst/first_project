<?php

namespace App\Http\Controllers;

use App\Models\Example;

class ExampleController extends Controller
{

    public function index(){
        $examples = Example::all();
        return view('index', compact('examples'));
    }

    public function example()
    {
        echo "работай";
    }
}
