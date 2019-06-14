<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return "i am index's AboutController";
    }

    public function home()
    {
        return "redirect()->route('about.index')";
    }

    public function test()
    {
        return "has test";
    }
}
