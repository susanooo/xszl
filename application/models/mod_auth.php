<?php
 class Mod_auth extends CI_Model {

    var $id   ;
    var $user = '';
    var $auth    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
 	function show_auth_byUser($id)
    {
    	$this->db->select('loginname');
    	$this->db->where('iduser', $id);
    	$query = $this->db->get('user');
    	$user = $query->row()->loginname;
    	$this->db->where('user', $user);
    	$query = $this->db->get('authority');
    	return $query;    	
    }
    
 	function delete_auth_byUser($user)
    {
    	$this->db->where('user', $user);
		$this->db->delete('authority');        
    }
    

    function update_auth($user)
    {
    	$this->delete_auth_byUser($user);
    	$auths = $_POST['auths'];
        $this->user   = $user;
        foreach($auths as $auth)
        {
        	$this->auth   = $auth;
        	$this->db->insert('authority', $this);
        }           
    }
 }