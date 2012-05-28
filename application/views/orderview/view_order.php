<?php
	$this->load->helper('url');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GB2312" />
<title>XXX管理系统</title>
<link rel="stylesheet" type="text/css" href="http://localhost/xszl/css/theme.css" />
<link rel="stylesheet" type="text/css" href="http://localhost/xszl/css/style.css" />
<script>
   var StyleFile = "theme" + document.cookie.charAt(6) + ".css";
   document.writeln('<link rel="stylesheet" type="text/css" href="http://localhost/xszl/css/' + StyleFile + '">');
</script>
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="http://localhost/xszl/css/ie-sucks.css" />
<![endif]-->
</head>

<body>
	<div id="container">
	<?php include("view_menu.php"); ?> 
        <div id="wrapper">
            <div id="content">
            <div id="rightnow">
                    <h3 class="reallynow">
              
                        <a href="<?php echo site_url('ordercon/con_order/add');?>" class="add">添加用户</a>
                        <br />
                    </h3>
			  </div>
                <br />
                <div id="box">
                	<h3>用户列表</h3>
                	<table width="100%">
						<thead>
							<tr>
                            	<th width="30px"><a href="#">单号<img src="http://localhost/xszl/img/icons/arrow_down_mini.gif" width="16" height="16" align="absmiddle" /></a></th>
                            	<th width="60px"><a href="#">客户</a></th>
                                <th width="70px"><a href="#">酒店（城市）</a></th>
                                <th width="50px"><a href="#">经手人</a></th>
                            </tr>
						</thead>
						<tbody>

							<?php 
								
								$query = $this->Mod_order->show_order($limit, $offset);
								
								if ($query->num_rows() > 0)
								{
									
									
									foreach ($query->result() as $row)
									{
										
											echo('<tr>');											
											echo('<td class=&#92;"a-center &#92;">');
											echo($row->order_no);
											echo('</td>');
											echo('<td>');
											echo($row->client);										
											echo('</td>');
											echo('<td>');
											echo($row->hotel);										
											echo('</td>');
											echo('<td>');
											echo($row->staff);
											echo('</td>');
											echo('</tr>');
										
									}										
						
								}
							?>
						</tbody>
					</table>
                    <div id="pager"><!--
                    	Page <a href="#"></a> 
                    	<input size="1" value="1" type="text" name="page" id="page" /> 
                    	<a href="#"></a>of 42
                    pages | View <select name="view">
                    				<option>10</option>
                                    <option>20</option>
                                    <option>50</option>
                                    <option>100</option>
                    			</select> 
                    per page | Total <strong>420</strong> records found
                    
                    -->
                    
                    <?php echo $pagination;?>
                    </div>
                </div>
                <br />
               
            </div>
            <?php include 'view_sidebar.php';?>
      </div>
        <div id="footer">
        <div id="credits">
        have a nice day
        </div>
        <div id="styleswitcher">
            <ul>
                <li><a href="javascript: document.cookie='theme='; window.location.reload();" title="Default" id="defswitch">d</a></li>
                <li><a href="javascript: document.cookie='theme=1'; window.location.reload();" title="Blue" id="blueswitch">b</a></li>
                <li><a href="javascript: document.cookie='theme=2'; window.location.reload();" title="Green" id="greenswitch">g</a></li>
                <li><a href="javascript: document.cookie='theme=3'; window.location.reload();" title="Brown" id="brownswitch">b</a></li>
                <li><a href="javascript: document.cookie='theme=4'; window.location.reload();" title="Mix" id="mixswitch">m</a></li>
            </ul>
        </div><br />

        </div>
</div>
</body>
</html>
