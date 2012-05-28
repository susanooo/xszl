<?php
class Con_user extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		header("Content-Type: text/html; charset=GB2312");
		$this->load->model(array('Mod_user','Mod_auth'));
		$this->load->database();
		$this->load->library(array('pagination','table'));
		$this->load->helper('url');
		$this->load->helper('form');	
	}
	
	function delete()
	{		
		$id = $this->uri->segment(4);
		$this->Mod_user->delete_user($id);
		$this->Mod_auth->delete_auth_byUser($id);		
		redirect(site_url('usercon/con_user/user_list'));
	}

	
	public function user_list($offset = 0)
	{
		$limit = 10;
		$config['base_url'] = site_url('usercon/con_user/user_list/');
		$config['total_rows'] = $this->Mod_user->count_user();
		$config['per_page'] = $limit; 
		$config['first_link'] = 'Ê×Ò³';
		$config['last_link'] = 'Î²Ò³';
		$config['uri_segment'] = 4;
		$config['num_links'] = 2;
		$config['next_link'] = '<img src="http://localhost/xszl/img/icons/arrow_right.gif" width="16" height="16" />';
		$config['prev_link'] = '<img src="http://localhost/xszl/img/icons/arrow_left.gif" width="16" height="16"/>';
		$this->pagination->initialize($config); 
		
		$data['limit'] = $limit;
		$data['offset'] = $offset;
		$data['pagination'] = $this->pagination->create_links();
		
		$this->load->view('userview/view_user',$data);
	}
	
	public function add()
	{
		$this->load->view('userview/view_add_user');
	}
	
	public function edit()
	{
		$this->load->view('userview/view_edit_user');
	}
	
	public function assign()
	{
		$this->load->view('userview/view_auth_user');
	}
	
	function update()
	{
 		$id = $this->uri->segment(4);		
 		$this->Mod_user->update_user($id);
	}
	
	function insert_auth()
	{
		$user = $_POST['loginname'];
		$this->Mod_auth->update_auth($user);
		redirect(site_url('usercon/con_user/user_list'));
	}
	public function insert()
	{
		$this->Mod_user->insert_user();
		$this->insert_auth();
	}
	
}