<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
	public function index()
	{
		return view('admin.index');
	}

	public function blank()
	{
		return view('admin.blankPage');
	}
}
