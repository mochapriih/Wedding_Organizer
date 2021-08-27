<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\WeddingPackage;
use App\Models\about;
use App\Models\Gallery;
use App\Models\User;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view ('pages.admin.dashboard', [
            'wedding_package' => WeddingPackage::count(),
            'about' => About::count(),
            'gallery' => Gallery::count(),
            'user' => User::count(),
        ]);
    }

}
