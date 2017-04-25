<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;
class ServicesController extends Controller
{
    public function create(Doctor $doc)
	{
		return view('login.services', ['specialty' => $doc->getAllFromDoctor(), 'uniqSpec' => $doc->getArraySpecilalty()]);	
	}
}
