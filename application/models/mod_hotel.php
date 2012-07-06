<?php
class Mod_hotel extends CI_Model {

    var $idhotel;
    var $region;
    var $name = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_all_hotel()
    {
        $query = $this->db->get('hotel');
        return $query->result();
    }
    
    function show_hotel($limit, $offset)
    {
    	if(!$limit)
    	{
    		$query =  $this->db->get('hotel');
    	}
    	else
    	{
    		$this->db->limit($limit, $offset);
    		$query = $this->db->get('hotel');
    	}	
    	return $query;
    }
    
	function show_hotel_region($id,$limit, $offset)
    {
    	
    	$this->db->where('region', $id);
    	if(!$limit)
    	{ 		
    		$query =  $this->db->get('hotel');
    	}
    	else
    	{
    		$this->db->limit($limit, $offset);
    		$query = $this->db->get('hotel');
    	}	
    	return $query;
    }
    
	function show_hotel_city($id, $limit, $offset)
    {
    	$this->db->select('idregion');
    	$this->db->where('city', $id);
    	$query = $this->db->get('region');
    	$i = 0;
    	$regions;
    	foreach($query->result() as $row)
    	{
    		$regions[$i] = $row->idregion;
    		$i++;
    	}
    	 	
    	$this->db->where_in('region', $regions);
    	if(!$limit)
    	{ 		
    		$query =  $this->db->get('hotel');
    	}
    	else
    	{
    		$this->db->limit($limit, $offset);
    		$query = $this->db->get('hotel');
    	}	
    	return $query;
    }
    
    function show_hotel_byId($id)
    {
    	$this->db->where('idhotel', $id);
    	$query = $this->db->get('hotel');
    	return $query;    	
    }
    
	function delete_hotel($id)
    {
    	$this->db->where('idhotel', $id);
		$this->db->delete('hotel');    	
    }
    
    function count_hotel()
    {   
        return $this->db->count_all('hotel');
    }
    
	function count_hotel_region($id)
    {   
    	$this->db->where('region', $id);
    	$this->db->from('hotel');
    	return  $this->db->count_all_results();
    }
    
    function  count_hotel_city($id)
    {
    	$this->db->select('idregion');
    	$this->db->where('city', $id);
    	$query = $this->db->get('region');
    	$i = 0;
    	$regions;
    	foreach($query->result() as $row)
    	{
    		$regions[$i] = $row->idregion;
    		$i++;
    	}
    	 	
    	$this->db->where_in('region', $regions);
    	$this->db->from('hotel');
    	return  $this->db->count_all_results();
    }
    

    function insert_hotel()
    {
        $this->name   = $_POST['newhotelname'];
        $this->region = $_POST['newregion'];
        $this->db->insert('hotel', $this);
    }

    function update_hotel($id)
    {
    	$data = array(
 			'name' => $this->input->post('newhotelname'),
 			'region' => $this->input->post('newregion'),
 		);
 		$this->db->where('idhotel', $id);
 		$this->db->update('hotel', $data);
    }

} 