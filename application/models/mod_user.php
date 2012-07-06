<?php
 class Mod_user extends CI_Model {

    var $iduser;
    var $loginname = '';
    var $pwd    = '';
    var $name = '';
    var $qq ;
    var $phone ;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_user($data)
    {
    	$this->db->where("loginname",$data['loginname']);
		$this->db->where('pwd',$data['pwd']);
		$this->db->from("xszl.user");
        $query = $this->db->get();
        return $query->result();
    }
	
	function show_user_byId($id)
    {
    	$this->db->select('loginname, name, qq, phone');
    	$this->db->where('iduser', $id);
    	$query = $this->db->get('user');
    	return $query;    	
    }
    
 	function count_user()
    {   
        return $this->db->count_all('user');
    }
    
     function show_user($limit, $offset)
    {
    	if(!$limit)
    	{
    		$query =  $this->db->get('user');
    	}
    	else
    	{
    		$this->db->limit($limit, $offset);
    		$query = $this->db->get('user');
    	}	
    	return $query;
    }
    
 	function delete_user($id)
    {
    	$this->db->where('iduser', $id);
		$this->db->delete('user');    	
    }
    
    function insert_user()
    {
        $this->loginname   = $_POST['loginname'];
        $this->name = $_POST['name'];
        if($_POST['qq'] != null)
        	$this->qq    = $_POST['qq'];
        if($_POST['phone'] != null)
        	$this->phone    = $_POST['phone'];
		$this->pwd    = $_POST['pwd'];
        $this->db->insert('user', $this);
    }

    function update_user($id)
    {
    	$data = array(
    		'loginname'=> $_POST['loginname'],
    		'name' => $_POST['name'],
    		'qq' => $_POST['qq'],
    		'phone' => $_POST['phone']);
		 if($_POST['pwd'] != '')
		 	$data['pwd'] = $_POST['pwd'] ;
		
		$this->db->where('iduser', $id);
        $this->db->update('user', $data);
    }
} 
?>