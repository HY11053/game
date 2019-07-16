<?php

namespace App\Http\Controllers\mobile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatementController extends Controller
{
    public function sitemap()
    {
        return view('mobile.about_sitemap');
    }
}
