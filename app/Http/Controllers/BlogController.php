<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class BlogController extends Controller
{
    public function index() {
		
		$blogs = DB::select("select id, title, post, created_on from blog_post order by created_on DESC;");
		
		return view('bloglist', ['blog_list' => $blogs]);
	}
	
	public function view($id) {
		
		$blogpost = DB::select("select bp.id, bp.title, bp.post, bp.created_on, u.username 
		from blog_post bp 
		left Join users u on u.user_id = bp.user_id 
		where id = '$id'");
		
		return view('blogview', ['blogpost' => $blogpost]);
	}
	
	public function edit($id) {
		$blogpost = DB::select("select * from blog_post where id = '$id'");
		return view('blogedit', ['blogedit' => $blogpost]);
	}
	
	public function update(Request $request, $id) {
		 $title = $request->input('title');
		 $post = $request->input('post');
		 $user_id = $request->input('user_id');
		 $blog_id = $request->input('blog_id');
		 
		  DB::update("update blog_post set title = '$title', post = '$post', modified_on = now() 
			where id = '$blog_id'");
			
			return redirect()->action('LoginController@adminview', ['id' => $user_id]);

	}
	
	public function addnewform($id){
		return view('addpost', ['userid' => $id]);
	}
	
	public function addnew(Request $request) {
			$title = $request->input('title');
		 $post = $request->input('post');
		 $user_id = $request->input('user_id');
		 
		 DB::insert('insert into blog_post (title, post, user_id , modified_on) 
		 values (?, ?, ? , ?)', [$title, $post, $user_id, now()]);
		 return redirect()->action('LoginController@adminview', ['id' => $user_id]);
	}
}