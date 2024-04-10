<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPlaceController extends Controller
{
    public function index()
    {
        return 'this is my page';
    }
    public function music()
    {
        return 'immeloman';
    }
    public function cat()
    {
        return 'molly';
    }
    public function town()
    {
        return 'kamyshin';
    }
}

