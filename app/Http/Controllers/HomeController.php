<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeddingPackage;
use App\Models\About;
use App\Models\Gallery;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = WeddingPackage::all();
        $itemAbout = About::all();
        $itemGallery = Gallery::all();

        return view('pages.home',[
                'items' => $items,
                'itemAbout' => $itemAbout,
                'itemGallery' => $itemGallery
        ]);
    }
    
    
}
