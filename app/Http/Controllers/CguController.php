<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CguController extends Controller
{
    public function __invoke() :View
    {
        return view('Pages.cgu');
    }
}