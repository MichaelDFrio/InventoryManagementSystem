<?php
namespace App\Http\Controllers;
class PagesController extends Controller{

public function getAdminHomepage(){
		return view('index');
	}
}