<?php

namespace App\Http\Controllers;

use App\Example;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
    	return view('welcome');
    }
}
