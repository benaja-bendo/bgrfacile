<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Response;

class StatisticController extends Controller
{
    public function index(): Response
    {
        $countUsers = \App\Models\User::count();
        return inertia('Statistic/Index', [
            'countUsers' => $countUsers,
        ]);
    }
}
