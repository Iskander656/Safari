<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $apartmentsCount = Apartment::count();
        return view('admin.dashboard', compact('apartmentsCount'));
    }
}
