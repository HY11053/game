<?php

namespace App\Http\Controllers\Mip;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatementController extends Controller
{
    public function sitemap()
    {
        return view('mip.about_sitemap');
    }
}
