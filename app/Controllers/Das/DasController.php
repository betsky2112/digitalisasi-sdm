<?php

namespace App\Controllers\Das;

use App\Controllers\BaseController;
// use App\Models\UserModel;

class DasController extends BaseController
{
    public function index()
    {
        // Tampilkan form login
        return view('pages/das/das_view');
    }
}
