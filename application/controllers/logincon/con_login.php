<?php
class Con_login extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		header("Content-Type: text/html; charset=GB2312");
		$this->load->model(array('Mod_user','Mod_hotel'));
		$this->load->database();
		$this->load->helper('url');
	}
	
	
	
	function verify()
	{
		$data = array(
			'loginname'=> $this->input->post('loginname'),
			'pwd'=>$this->input->post('pwd')
			);
		if($this->input->post('loginname')=='' || $this->input->post('pwd')=='')
		{
			show_error("用户或密码错误");
		}
		else
		{
			$result = $this->Mod_user->get_user($data);
			if($result == false)
				show_error("用户或密码错误");
			else
			{				
				if(!isset($_SESSION)){
    				session_start();
				}			
				$_SESSION['user'] = $_POST['loginname'];
				redirect(site_url('maincon/con_main/main'));
			}
		}
	}
	
	function logout()
	{
		session_destroy();
		redirect(site_url('welcome'));
	}
	
}
?>
