<?php

namespace Marvision\LaravelAdmin\Http\Controllers;

use App\Http\Controllers\Controller;
class DashboardController extends Controller
{
	public function index(){
		// \App::setLocale('fr'); 

		return view('adminView::dashboard');
	}
}