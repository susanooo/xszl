<?php
	if(!isset($_SESSION)){
    	session_start();
	}			
	$this->load->helper('url');
?>
<div id="sidebar">
  				<ul><li><h3>当前用户:  <?php if($_SESSION['user'] != "") echo $_SESSION['user']; ?></h3>
          				<ul>
                        	<li><a href="#" class="user">个人信息管理</a></li>
                            <li><a href="<?php echo site_url('logincon/con_login/logout');?>" class="logoff">注销</a></li>
                        </ul>
                    </li>
                	<li><h3><a href="<?php echo site_url('maincon/con_main/main');?>" class="house">首页</a></h3>
                        <ul>
                        	<li><a href="#" class="invoices">打印</a></li>
                            <li><a href="#" class="search">查找</a></li>
                        </ul>
                    </li>
                    <li><h3><a href="<?php echo site_url('ordercon/con_order/index');?>" class="cart">订房</a></h3>
          				<ul>
                        	<li><a href="http://localhost/xszl/index.php/ordercon/con_order/index" class="cartadd">新订单</a></li>
                          <li><a href="#" class="folder_table">查看订单</a></li>
                            <li><a href="#" class="addorder">订单管理</a></li>
                        </ul>
                    </li>
                    <li><h3><a href="#" class="promotions">财务</a></h3>
          				<ul>
                            <li><a href="#" class="manage_page">财务管理</a></li>
                            <li><a href="#" class="cart">待加...</a></li>
                            <li><a href="#" class="folder">待加...</a></li>
            				<li><a href="#" class="promotions">待加...</a></li>
                        </ul>
                    </li>
                  <li><h3><a href="<?php echo site_url('hotelcon/con_hotel/index');?>" class="modules">酒店</a></h3>
          				<ul>
                            <li><a href="http://localhost/xszl/index.php/hotelcon/con_hotel/add" class="shipping">添加酒店</a></li>
            				<li><a href="<?php echo site_url('hotelcon/con_hotel/index');?>" class="modules_manage">酒店管理</a></li>
                        </ul>
                    </li>
				</ul>       
          </div>

