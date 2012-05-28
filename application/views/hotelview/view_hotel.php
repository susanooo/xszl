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
                      
                        
                        <a href="<?php echo site_url('hotelcon/con_hotel/add');?>" class="add">增加酒店</a>
                        <br />
                    </h3>
			  </div>
                <br />
                    <div id="box">
                	<h3>酒店列表</h3>
                                       
                	<table width="100%">
						<thead>
							<tr>
                            	<th width="30px"><a href="#">ID<img src="http://localhost/xszl/img/icons/arrow_down_mini.gif" width="16" height="16" align="absmiddle" /></a></th>
                            	<th width="60px"><a href="#">酒店名</a></th>
                                <th width="60px"><a href="#">区域</a></th>
                                <th width="70px"><a href="#">城市</a></th>
                                <th width="60px"><a href="#">编辑</a></th>
                            </tr>
						</thead>
						<tbody>

							<?php 
								//$query = $this->Mod_hotel->show_hotel($limit, $offset);
								if ($query->num_rows() > 0)
								{
									foreach ($query->result() as $row)
									{
										$row_region =  $this->Mod_region->show_region_byId($row->region)->row();
										$row_city =  $this->Mod_city->show_city_byId($row_region->city)->row();
										
								
											$edit = anchor(site_url('hotelcon/con_hotel/edit/'.$row->idhotel), '<img src="http://localhost/xszl/img/icons/user_edit.png" title="编辑酒店" width="16" height="16" />')."&nbsp;&nbsp;";
											$delete = anchor(site_url('hotelcon/con_hotel/delete/'.$row->idhotel), '<img src="http://localhost/xszl/img/icons/user_delete.png" title="删除酒店" width="16" height="16" />')."&nbsp;&nbsp;";
											echo('<tr>');
											
											echo('<td class=&#92;"a-center &#92;">');
											echo($row->idhotel);
											echo('</td>');
											echo('<td>');
											echo($row->name);										
											echo('</td>');
											echo('<td>');
											echo($row_region->name);										
											echo('</td>');
											echo('<td>');
											echo($row_city->name);
											echo('</td>');
											echo('<td>');
											echo('<a>');
											echo($edit);
											echo('</a>');
											echo('<a>');
											echo($delete);
											echo('</a>');								
											echo('</td>');
											echo('</tr>');
										
									}										
						
								}
							?>
						</tbody>
					</table>
                    <div id="pager">
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
