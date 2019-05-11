<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
		return view('login');
	}
	
	public function verify(Request $request) {
		
		$name = $request->input('username');
		$pwd = $request->input('pwd');
		
		$verifyuser = DB::select("select user_id, role from users where username = '$name' and password ='$pwd'; ");
		
		if(count($verifyuser) > 0) {
			//return view('adminlist');
			
			return redirect()->action('LoginController@adminview', ['id' => $verifyuser->user_id]);
		} else {	
			//return view('login', ['msg' => "Incorrect / Invalid user details"]);
			return redirect()->action('LoginController@index');
		}
	}
	
	public function adminview($id) {
		
		$bloglist = DB::select("select bp.id, bp.title, bp.post, bp.created_on, bp.modified_on, bp.user_id, u.role 
		from blog_post bp
		left Join users u on u.user_id = bp.user_id  
		order by bp.created_on DESC;");
	
		return view('adminlist', ['bloglist' => $bloglist, 'userid' => $id]);
	}
}