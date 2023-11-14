<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        return 'Chào mừng các bạn đã đến với toidicode.com22';
    }

    public function store(Request $request)
    {
        return 'Post Welcome';
    }
}
