<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('article.home');
    }
}
