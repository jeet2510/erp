<?php

namespace App\Http\Controllers;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.index');
    }

    public function login()
    {
        return view('auth.boxed-signin');
    }
}
