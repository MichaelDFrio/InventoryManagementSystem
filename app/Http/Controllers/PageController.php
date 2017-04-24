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
	public function getCheckoutForm(){
		return view('checkout-create');
	}
	public function getCheckoutPending(){
		return view('checkout-pending');
	}
}
