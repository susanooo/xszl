<?php $this->load->helper('url');
	$module = $this->uri->segment(1);
	?>
    	<div id="header">
    	<h2>携手之旅管理系统</h2>

    <div id="topmenu">
            	<ul>
            		
                	<li class="<?php if($module == 'maincon') echo 'current';?>"><a href="<?php echo site_url('maincon/con_main/main');?>">首页</a></li>
                    <li class="<?php if($module == 'ordercon') echo 'current';?>"><a href="<?php echo site_url('ordercon/con_order/index');?>">订房</a></li>
                	<li class="<?php if($module == 'usercon') echo 'current';?>"><a href="<?php echo site_url('usercon/con_user/user_list');?>">用户</a></li>
                    <li class="<?php if($module == 'hotelcon') echo 'current';?>"><a href="<?php echo site_url('hotelcon/con_hotel/index');?>">酒店</a></li>
                    <li class="<?php if($module == 'fincon') echo 'current';?>"><a href="#">财务管理</a></li>
              </ul>
          </div>
      </div>