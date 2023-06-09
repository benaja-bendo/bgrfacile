<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LegalNoticeController extends Controller
{
    public function __invoke() :View
    {
        return view('Pages.legalNotice');
    }
}
