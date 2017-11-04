<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function panel() {
    	if (!Auth::check()) {
    		return redirect("login");
    	}
    	return view("admin");
    }
}
