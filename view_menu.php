<?php $this->load->helper('url');
	$module = $this->uri->segment(1);
	?>
    	<div id="header">
    	<h2>Я��֮�ù���ϵͳ</h2>

    <div id="topmenu">
            	<ul>
            		
                	<li class="<?php if($module == 'maincon') echo 'current';?>"><a href="<?php echo site_url('maincon/con_main/main');?>">��ҳ</a></li>
                    <li class="<?php if($module == 'ordercon') echo 'current';?>"><a href="<?php echo site_url('ordercon/con_order/index');?>">����</a></li>
                	<li class="<?php if($module == 'usercon') echo 'current';?>"><a href="<?php echo site_url('usercon/con_user/user_list');?>">�û�</a></li>
                    <li class="<?php if($module == 'hotelcon') echo 'current';?>"><a href="<?php echo site_url('hotelcon/con_hotel/index');?>">�Ƶ�</a></li>
                    <li class="<?php if($module == 'fincon') echo 'current';?>"><a href="#">�������</a></li>
              </ul>
          </div>
      </div>