<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatementController extends Controller
{
    public function sitemap()
    {
        return view('frontend.about_sitemap');
    }
}
