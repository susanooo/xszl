<?php
class Con_hotel extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		header("Content-Type: text/html; charset=GB2312");
		$this->load->model(array('Mod_hotel','Mod_region','Mod_city'));
		$this->load->database();
		$this->load->library(array('pagination','table'));
		$this->load->helper('url');
		$this->load->helper('form');	
	}
	
	function index()
	{
		$this->load->view('hotelview/view_selectregion_hotel');
	}
		
	function transfer()
	{	
		if(isset($_POST['city']) and isset($_POST['region'])){
			
			if(!isset($_SESSION)){
    			session_start();
			}			
			$_SESSION['city'] = $_POST['city'];
	    	$_SESSION['region'] = $_POST['region'];
	    	
	    	redirect(site_url('hotelcon/con_hotel/hotel_region_list'));
		}
		else if(!isset($_SESSION['city']) or !isset($_SESSION['region'])) 
		{
			$this->index();
		}
		else 
			$this->hotel_region_list();
			redirect(site_url('hotelcon/con_hotel/hotel_region_list'));
		
	}
	
	
	public function hotel_region_list($offset = 0)
	{
		$limit = 10;		
		if(!isset($_SESSION)){
    		session_start();
		}
	 	if($_SESSION['city'] == 0 and $_SESSION['region'] == 0)
	 	{
	 		$config['total_rows'] = $this->Mod_hotel->count_hotel();
	 		$query = $this->Mod_hotel->show_hotel($limit, $offset);
	 	}
	 	else if($_SESSION['city'] != 0 and $_SESSION['region'] == 0)
	 	{
	 		$config['total_rows'] = $this->Mod_hotel->count_hotel_city($_SESSION['city']);
	 		$query = $this->Mod_hotel->show_hotel_city($_SESSION['city'], $limit, $offset);
	 	}
		else 
		{
			$config['total_rows'] = $this->Mod_hotel->count_hotel_region($_SESSION['region']);
			$query = $this->Mod_hotel->show_hotel_region($_SESSION['region'] ,$limit, $offset);
		}
		
		
	
		$config['base_url'] = site_url('hotelcon/con_hotel/hotel_region_list/');
		$config['per_page'] = $limit; 
		$config['first_link'] = 'Ê×Ò³';
		$config['last_link'] = 'Î²Ò³';
		$config['uri_segment'] = 4;
		$config['num_links'] = 1;
		$config['next_link'] = '<img src="http://localhost/xszl/img/icons/arrow_right.gif" width="16" height="16" />';
		$config['prev_link'] = '<img src="http://localhost/xszl/img/icons/arrow_left.gif" width="16" height="16"/>';
		$this->pagination->initialize($config); 		
		$data['limit'] = $limit;
		$data['offset'] = $offset;
		$data['pagination'] = $this->pagination->create_links();	
		$data['query'] = $query;
		$this->load->view('hotelview/view_hotel',$data);
	}
	
	
	function insert()
	{
		$this->Mod_hotel->insert_hotel();
		redirect(site_url('hotelcon/con_hotel/hotel_region_list'));
	}
	
	function add()
	{
		$this->load->view('hotelview/view_add_hotel');
	}
	
	public function query()
	{
		$result = $this->Mod_hotel->get_all_hotel();
		$data['result'] = $result;
		$this->load->view('mainview/view_hotel', $data);
		
	}
	
	function update()
	{			
 		$id = $this->uri->segment(4);		
 		$this->Mod_hotel->update_hotel($id);
 		$this->hotel_region_list();
 		
	}

	function edit()
	{
		$this->load->view("hotelview/view_edit_hotel");
	}
	
	function delete()
	{		
		$id = $this->uri->segment(4);
		$this->Mod_hotel->delete_hotel($id);
		redirect(site_url('hotelcon/con_hotel/hotel_region_list'));
	}
	
	function select_region()
	{
		$id = $this->uri->segment(4);
		$regions = '<option value="0" selected> ËùÓÐ</option>';
		if($id != 0)
		{
			$query = $this->Mod_region->show_regions_byCityId($id);
			
			foreach($query->result() as $row)
			{
				$regions .= '<option value="'.$row->idregion.'">'.$row->name.'</option>';  
			}  

		}
		echo $regions;
	}
	
	
	function select_hotel_byRegion()
	{
		$id = $this->uri->segment(4);
		$hotels = '';
		if($id != 0)
		{
			$query = $this->Mod_hotel->show_hotel_region($id ,$limit, $offset);
			
			foreach($query->result() as $row)
			{
				$hotels .= '<option value="'.$row->idhotel.'">'.$row->name.'</option>';  
			}  

		}
		echo $hotels;
	}
	
	
	function select_hotel_byCity()
	{
		$id = $this->uri->segment(4);
		$hotels = '';
		if($id != 0)
		{
			$query = $this->Mod_hotel->show_hotel_city($id ,$limit, $offset);
			
			foreach($query->result() as $row)
			{
				$hotels .= '<option value="'.$row->idhotel.'">'.$row->name.'</option>';  
			}  

		}
		echo $hotels;
	}
	
	function add_select_region()
	{
		$id = $this->uri->segment(4);
		$regions = '';
		if($id != 0)
		{
			$query = $this->Mod_region->show_regions_byCityId($id);
			
			foreach($query->result() as $row)
			{
				$regions .= '<option value="'.$row->idregion.'">'.$row->name.'</option>';  
			}  

		}
		echo $regions;
	}
	
}
?>
