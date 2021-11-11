<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * landing page of the application
     * */ 
    public function index()
    {
        return view('welcome');
    }
    /**
     * Blog Page
     * */ 
    public function blog()
    {
        return view('blog');
    }
    /**
     * Contact Us Page
     * */ 
    public function contactUs()
    {
        return view('contactUs');
    }
    /**
     * Team Page
     * */ 
    public function team()
    {
        return view('team');
    }
    /**
     * Services Page
     * */ 
    public function services()
    {
        return view('services');
    }
}
