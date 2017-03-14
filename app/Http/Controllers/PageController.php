<?php
namespace App\Http\Controllers;
class PageController extends Controller{

	public function getAdminHomepage(){
		return view('admin-homepage');
	}
	public function getPendingMessage(){
		return view('pending-message');
	}
	public function getUserHomepage(){
		return view('user-homepage');
	}
}
