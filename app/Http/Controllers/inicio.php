<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Auth;

class inicio extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */

      public function index()
    {
        $users = DB::table('estado')->get();
        return view('welcome', ['estados' => $users]);
    }
}
