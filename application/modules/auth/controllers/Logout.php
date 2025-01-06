<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends MX_Controller
{

	public function action()
	{
		create_log('8ba9df7e-6199-4e58-aa17-16f74cdde656', 'Logout');
		$this->session->sess_destroy();
		delete_cookie('user_id');
		redirect(site_url() . '/auth/login');
	}
}
