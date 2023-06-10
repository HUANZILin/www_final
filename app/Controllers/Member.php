<?php

namespace App\Controllers;

class Member extends BaseController
{
    public function index()
    {
        return view('pages/home_visitor');
    }
}
