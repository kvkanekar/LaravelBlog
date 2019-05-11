<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
		$users = DB::select("select username from users where user_id = '1'");
		
		return view('user', ['users' => $users]);
	}
}