<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
// use App\Models\UserModel;

class DashboardController extends BaseController
{
    public function index()
    {
        // Tampilkan form login
        return view('pages/dashboard/dashboard_view');
    }
}
