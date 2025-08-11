<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Services\ArticleService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('pages.guest.home');
    }
}
