<?php
namespace App\Http\Controllers;
class PageController extends Controller{

	public function getAdminHomepage(){
		return view('index');
	}
	public function getPendingMessage(){
		return view('pending-message');
	}
}
