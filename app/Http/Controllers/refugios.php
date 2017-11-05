<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Auth;

class refugios extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */

      public function index()
    {
        if (!Auth::check()) {
    		return redirect("login");
    	}
        $users = DB::table('refugios')->get();
	    $estados = DB::table('estado')->get();
        $sensores = DB::table('sensores')->get();
        return view('admin', ['refugios' => $users, 'sensores' => $sensores, 'estados' => $estados]);
    }
	
	public function alertar(){
		DB::table('estado')
            ->where('id', 1)
            ->update(['estado' => '1']);
		return view('listo');
	}
	
	public function restaurar(){
		DB::table('estado')
            ->where('id', 1)
            ->update(['estado' => '2']);
		return view('listo');
	}
}
