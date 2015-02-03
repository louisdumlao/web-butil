<?php

class UserController extends BaseController {
	
	protected $layout = 'layout.loginlayout';
	
	public function index() {
		logout();
	}
	
	public function logout() {
		this->layout->content = View::make('login');
	}
	
	public function login() {
	
	}
	
}