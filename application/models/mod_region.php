<?php
class Mod_region extends CI_Model {

    var $idregion  ;
    var $city ;
    var $name = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_all_region()
    {
        $query = $this->db->get('region');
        return $query->result();
    }
    
    function show_hotel($limit, $offset)
    {
    	if(!$limit)
    	{
    		$query =  $this->db->get('region');
    	}
    	else
    	{
    		$this->db->limit($limit, $offset);
    		$query = $this->db->get('region');
    	}	
    	return $query;
    }
    
    function show_region_byId($id)
    {
    	$this->db->where('idregion', $id);
    	$query = $this->db->get('region');
    	return $query;    	
    }
    
	function show_regions_byCityId($id)
    {
    	$this->db->where('city', $id);
    	$query = $this->db->get('region');
    	return $query;    	
    }
    
    
	function delete_region($id)
    {
    	$this->db->where('idregion', $id);
		$this->db->delete('region');    	
    }
    
    function count_region()
    {   
        return $this->db->count_all('region');
    }
    
    function cout_region_city($id)
    {
    	$this->db->where('city', $id);
    	$this->db->from('region');
    	return  $this->db->count_all_results();
    }

    function insert_region()
    {
        $this->city   = $_POST['city'];
        $this->name = $_POST['region'];
        $this->db->insert('region', $this);
    }

    function update_region($data, $id)
    {
 		$this->db->where('idregion', $id);
 		$this->db->update('region', $data);
    }

} 