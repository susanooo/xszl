<?php
class Con_main extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		header("Content-Type: text/html; charset=GB2312");
		$this->load->helper('url');
	}
	
	function main()
	{
		if(!isset($_SESSION))
		{
    		session_start();
		}
		if(isset($_SESSION['user']))
			$this->load->view('mainview/view_index');
		else 
			redirect(site_url('welcome'));
	}
	
}