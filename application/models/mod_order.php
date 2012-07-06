<?php
class Mod_order extends CI_Model{
	
	var $order_no;
	var $client;
	var $pay_state;
	var $settle;
	var $hotel;
	var $room_type;
	var $stay_time;
	var $room_amount;
	var $checkin_date;
	var $checkout_date;
	var $uprice;
	var $cprice;
	var $supplier;
	var $supplier_no;
	var $supplier_pay;
	var $user_name;
	var $tprice;
	var $staff;
	var $remark;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function insert_order()
    {
        $this->order_no = $_POST['orderno'];
        $this->client = $_POST['client'];
        $this->pay_state = $_POST['paystate'];
        //$this->settle = $_POST['settle'];
        $this->hotel = $_POST['hotel'];        
        $this->room_type = $_POST['room_type'];
        $this->room_amount = $_POST['room_amount'];
        $this->checkin_date = $_POST['checkin_date'];
        $this->checkout_date = $_POST['checkout_date'];
        $this->uprice = $_POST['uprice'];
        $this->cprice = $_POST['cprice'];
        $this->supplier = $_POST['supplier'];
        $this->supplier_no = $_POST['supplier_no'];
        $this->supplier_pay = $_POST['supplier_pay'];
        $this->user_name = $_POST['user_name'];
        $this->tprice = $_POST['tprice'];
        $this->staff = $_POST['staff'];
        $this->remark = $_POST['remark'];
        $this->db->insert('order', $this);
    }
    function show_order($limit,$offset)
    {
    	if(!$limit)
    	{
    		$this->db->select('order_no,client,hotel,staff');
    		$this->db->from('xszl.order');
    		$query = $this->db->get();
    	}
    	else 
    	{
    		$this->db->limit($limit,$offset);
    		$query = $this->db->get('order');
    	}
    	return $query;
    }
    function count_order()
    {
    	return  $this->db->count_all('order');
    }
} 

?>