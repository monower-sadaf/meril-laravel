<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index()
    {
        return view('portal.index');
    }
    public function software()
    {
        return view('portal.software');
    }
    public function marketing()
    {
        return view('portal.marketing');
    }
    public function about_us()
    {
        return view('portal.about_us');
    }
    public function contact_us()
    {
        return view('portal\contact-us');
    }
}
