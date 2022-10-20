<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardIndex() {
        return view('dashboard.index', [
            "title" => "Dashboard",
            "active" => "Dashboard"
        ]);
    }
}
