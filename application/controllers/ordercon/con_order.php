<?php
class Con_order extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		header("Content-Type: text/html; charset=GB2312");
		$this->load->model(array('Mod_hotel','Mod_region','Mod_city','Mod_order'));
		$this->load->database();
		$this->load->library(array('pagination','table'));
		$this->load->helper('url');
		$this->load->helper('form');	
	}
	
	function index($offset = 0)
	{
		$limit = 10;
		$config['base_url'] = site_url('ordercon/con_order/index/');
		$config['total_rows'] = $this->Mod_order->count_order();
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
		
		$this->load->view('orderview/view_order',$data);
	}
	
	function add()
	{
		$this->load->view('orderview/view_add_order');
	}
	
	public function insert()
	{
		$this->Mod_order->insert_order();
	}
	
}


?>