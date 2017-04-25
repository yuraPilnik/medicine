<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public function index(Home $homeNewsModel)
    {
        $homeNews = $homeNewsModel->getPublishedNews();
        return view('index', ['newsHome' => $homeNews]);
    }
	public function store()
	{
		return view('login.signinAdmin');
	}
}
