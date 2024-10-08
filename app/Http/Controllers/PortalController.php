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
        return view('portal.contact-us');
    }
    public function why_us()
    {
        return view('portal.why_us');
    }
    public function partner()
    {
        return view('portal.partner');
    }
    public function terms_and_conditions()
    {
        return view('portal.terms_and_conditions');
    }
}
