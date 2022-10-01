<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = 'meus dados';
        return view('dashboard', compact('data'));
    }
}
