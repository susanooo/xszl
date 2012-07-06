<?php
	$this->load->helper('url');
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
              <div id="infowrap">
              	  <div id="infobox2">
                    
                    <p><img src="http://localhost/xszl/img/user.LineChart.reversed.png" width="730" height="266" /></p>            
                  </div>
                  <div id="infobox">
                    <h3>Last 5 Orders</h3>
                    <table>
						<thead>
							<tr>
                            	<th>Customer</th>
                                <th>Items</th>
                                <th>Grand Total</th>
                            </tr>
						</thead>
						<tbody>
							<tr>
                            	<td><a href="#">Jennifer Kyrnin</a></td>
                                <td>1</td>
                                <td>14.95td>
                            </tr>
							<tr>
                            	<td><a href="#">Mark Kyrnin</a></td>
                            	<td>2</td>
                                <td>34.27td>
                            </tr>
							<tr>
                            	<td><a href="#">Virg</a></td>
                                <td>2</td>
                                <td>61.39</td>
                            </tr>
							<tr>
                            	<td><a href="#">Mark Kyrnin</a></td>
                            	<td>2</td>
                                <td>34.27td>
                            </tr>
                            <tr>
                            	<td><a href="#">Mark Kyrnin</a></td>
                            	<td>2</td>
                                <td>34.27td>
                            </tr>
						</tbody>
					</table>            
                  </div>
                  <div id="infobox" class="margin-left">
                    <h3>Bestsellers</h3> 
                    <table>
						<thead>
							<tr>
                            	<th>Product Name</th>
                                <th>Price</th>
                                <th>Orders</th>
                            </tr>
						</thead>
						<tbody>
							<tr>
                               	<td><a href="#">Mark Kyrnin</a></td>
                            	<td>2</td>
                                <td>34.27td>
                            </tr>
							<tr>
                            	<td><a href="#">Mark Kyrnin</a></td>
                            	<td>2</td>
                                <td>34.27td>
                            </tr>
							<tr>
                            	<td><a href="#">Mark Kyrnin</a></td>
                            	<td>2</td>
                                <td>34.27td>
                            </tr>
							<tr>
                            	<td><a href="#">Mark Kyrnin</a></td>
                            	<td>2</td>
                                <td>34.27td>
                            </tr>
                            <tr>
                            	<td><a href="#">Mark Kyrnin</a></td>
                            	<td>2</td>
                                <td>34.27td>
                            </tr>
						</tbody>
					</table>
                  </div>
                  <div id="infobox">
                    <h3>New Customers</h3>
                    <table>
						<thead>
							<tr>
                            	<th>Customer</th>
                                <th>Orders</th>
                                <th>Average</th>
                                <th>Total</th>
                            </tr>
						</thead>
						<tbody>
							<tr>
                            	<td><a href="#">Jennifer Kyrnin</a></td>
                                <td>1</td>
                                <td>5.6</td>
                                <td>14.95</td>
                            </tr>
							<tr>
                            	<td><a href="#">Jennifer Kyrnin</a></td>
                                <td>1</td>
                                <td>5.6</td>
                                <td>14.95</td>
                            </tr>
							<tr>
                            	<td><a href="#">Jennifer Kyrnin</a></td>
                                <td>1</td>
                                <td>5.6</td>
                                <td>14.95</td>
                            </tr>
							<tr>
                            	<td><a href="#">Jennifer Kyrnin</a></td>
                                <td>1</td>
                                <td>5.6</td>
                                <td>14.95</td>
                            </tr>
                            <tr>
                            	<td><a href="#">Jennifer Kyrnin</a></td>
                                <td>1</td>
                                <td>5.6</td>
                                <td>14.95</td>
                            </tr>
						</tbody>
					</table>                 
                  </div>
                  <div id="infobox" class="margin-left">
                    <h3>Last 5 Reviews</h3> 
                    <table>
						<thead>
							<tr>
                            	<th>Reviewer</th>
                                <th>Product</th>
                                <th>Action</th>
                            </tr>
						</thead>
						<tbody>
							<tr>
                            	<td><a href="#">Jennifer Kyrnin</a></td>
                                <td><a href="#">Apple iPhone 3G 8GB</a></td>
                                <td><a href="#"><img src="http://localhost/xszl/img/icons/page_white_link.png" /></a><a href="#"><img src="http://localhost/xszl/img/icons/page_white_edit.png" /></a><a href="#"><img src="http://localhost/xszl/img/icons/page_white_delete.png" /></a></td>
                            </tr>
							<tr>
                            	<td><a href="#">Mark Kyrnin</a></td>
                            	<td><a href="#">Prenosnik HP 530 1,6GHz</a></td>
                                <td><a href="#"><img src="http://localhost/xszl/img/icons/page_white_link.png" /></a><a href="#"><img src="http://localhost/xszl/img/icons/page_white_edit.png" /></a><a href="#"><img src="http://localhost/xszl/img/icons/page_white_delete.png" /></a></td>
                            </tr>
							<tr>
                            	<td><a href="#">Virg锟斤拷io Cezar</a></td>
                                <td><a href="#">Fuji FinePix S5800</a></td>
                                <td><a href="#"><img src="http://localhost/xszl/img/icons/page_white_link.png" /></a><a href="#"><img src="http://localhost/xszl/img/icons/page_white_edit.png" /></a><a href="#"><img src="http://localhost/xszl/img/icons/page_white_delete.png" /></a></td>
                            </tr>
							<tr>
                            	<td><a href="#">Todd Simonides</a></td>
                                <td><a href="#">Canon PIXMA MP140</a></td>
                                <td><a href="#"><img src="http://localhost/xszl/img/icons/page_white_link.png" /></a><a href="#"><img src="http://localhost/xszl/img/icons/page_white_edit.png" /></a><a href="#"><img src="http://localhost/xszl/img/icons/page_white_delete.png" /></a></td>
                            </tr>
                            <tr>
                            	<td><a href="#">Carol Elihu</a></td>
                                <td><a href="#">Prenosnik HP 530 1,6GHz</a></td>
                                <td><a href="#"><img src="http://localhost/xszl/img/icons/page_white_link.png" /></a><a href="#"><img src="http://localhost/xszl/img/icons/page_white_edit.png" /></a><a href="#"><img src="http://localhost/xszl/img/icons/page_white_delete.png" /></a></td>
                            </tr>
						</tbody>
					</table>
                  </div>
              </div>
            </div>
            <?php include 'view_sidebar.php';?>
      </div>
        <div id="footer">
        <div id="credits">
   		have a nice day!
        </div>
        <div id="styleswitcher">
            <ul>
                <li><a href="javascript: document.cookie='theme='; window.location.reload();" title="Default" id="defswitch">d</a></li>
                <li><a href="javascript: document.cookie='theme=1'; window.location.reload();" title="Blue" id="blueswitch">b</a></li>
                <li><a href="javascript: document.cookie='theme=2'; window.location.reload();" title="Green" id="greenswitch">g</a></li>
                <li><a href="javascript: document.cookie='theme=3'; window.location.reload();" title="Brown" id="brownswitch">b</a></li>
                <li><a href="javascript: document.cookie='theme=4'; window.location.reload();" title="Mix" id="mixswitch">m</a></li>
                <li><a href="javascript: document.cookie='theme=5'; window.location.reload();" title="Mix" id="defswitch">m</a></li>
            </ul>
        </div><br />

        </div>
</div>
</body>
</html>
