<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class DashboardController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }
}
