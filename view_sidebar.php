<?php
	if(!isset($_SESSION)){
    	session_start();
	}			
	$this->load->helper('url');
?>
<div id="sidebar">
  				<ul><li><h3>��ǰ�û�:  <?php if($_SESSION['user'] != "") echo $_SESSION['user']; ?></h3>
          				<ul>
                        	<li><a href="#" class="user">������Ϣ����</a></li>
                            <li><a href="<?php echo site_url('logincon/con_login/logout');?>" class="logoff">ע��</a></li>
                        </ul>
                    </li>
                	<li><h3><a href="<?php echo site_url('maincon/con_main/main');?>" class="house">��ҳ</a></h3>
                        <ul>
                        	<li><a href="#" class="invoices">��ӡ</a></li>
                            <li><a href="#" class="search">����</a></li>
                        </ul>
                    </li>
                    <li><h3><a href="<?php echo site_url('ordercon/con_order/index');?>" class="cart">����</a></h3>
          				<ul>
                        	<li><a href="http://localhost/xszl/index.php/ordercon/con_order/index" class="cartadd">�¶���</a></li>
                          <li><a href="#" class="folder_table">�鿴����</a></li>
                            <li><a href="#" class="addorder">��������</a></li>
                        </ul>
                    </li>
                    <li><h3><a href="#" class="promotions">����</a></h3>
          				<ul>
                            <li><a href="#" class="manage_page">�������</a></li>
                            <li><a href="#" class="cart">����...</a></li>
                            <li><a href="#" class="folder">����...</a></li>
            				<li><a href="#" class="promotions">����...</a></li>
                        </ul>
                    </li>
                  <li><h3><a href="<?php echo site_url('hotelcon/con_hotel/index');?>" class="modules">�Ƶ�</a></h3>
          				<ul>
                            <li><a href="http://localhost/xszl/index.php/hotelcon/con_hotel/add" class="shipping">��ӾƵ�</a></li>
            				<li><a href="<?php echo site_url('hotelcon/con_hotel/index');?>" class="modules_manage">�Ƶ����</a></li>
                        </ul>
                    </li>
				</ul>       
          </div>

