<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /**
     * redirect admin after login
     *
     * @return \Illuminate\View\
     */
    public function dashboard()
    {
        return view('visitorDashboard');
    }
}
