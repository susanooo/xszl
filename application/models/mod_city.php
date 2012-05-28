<?php
class Mod_city extends CI_Model {

    var $idcity  ;
    var $name = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_all_city()
    {
        $query = $this->db->get('city');
        return $query->result();
    }
    
    function show_hotel($limit, $offset)
    {
    	if(!$limit)
    	{
    		$query =  $this->db->get('city');
    	}
    	else
    	{
    		$this->db->limit($limit, $offset);
    		$query = $this->db->get('city');
    	}	
    	return $query;
    }
    
    function show_city_byId($id)
    {
    	$this->db->where('idcity', $id);
    	$query = $this->db->get('city');
    	return $query;    	
    }
    

	function delete_city($id)
    {
    	$this->db->where('idcity', $id);
		$this->db->delete('city');    	
    }
    
    function count_city()
    {   
        return $this->db->count_all('city');
    }
    
    function insert_city()
    {
        $this->name = $_POST['city'];
        $this->db->insert('city', $this);
    }

    function update_region($data, $id)
    {
 		$this->db->where('idcity', $id);
 		$this->db->update('city', $data);
    }

} 