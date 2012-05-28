<?php
	$this->load->helper('url');
	$cities  = $this->Mod_city->get_all_city();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>XXX管理系统</title>
<link rel="stylesheet" type="text/css" href="http://localhost/xszl/css/theme.css" />
<link rel="stylesheet" type="text/css" href="http://localhost/xszl/css/style.css" />
<script type="text/javascript" src="http://localhost/xszl/js/jquery-1.7.2.min.js">
</script>  
<script language="javascript">  
	$(document).ready(function(){  
  $("#city").change(function(){                                                                                      
   $("#region").load("http://localhost/xszl/index.php/hotelcon/con_hotel/add_select_region/"+ $("#city").val());    
  });  
});  
</script> 
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
             
                <div id="box">
                	<h3 id="adduser">增加酒店</h3>
                    <form id="form" action="<?php echo site_url('hotelcon/con_hotel/insert');?>" method="post">
                      <fieldset id="hotel">
                        <label for="hotelname">酒店名 : </label> 
                        <input name="newhotelname" id="hotelname" type="text" tabindex="1" />
                        <br /><br />
                        <label for="city">城市 : </label>
                        <select name="newcity" id="city" tabindex="2">
                        	<option value="0" selected>未知</option>
                   					
                            <?php
                            		
                        		foreach($cities as $row)
                        		{
                        			echo '<option value="'.$row->idcity.'" >'.$row->name.'</option>';
                        		} 
                        	 
                            ?>                       	
          				</select>                    
                        <br /><br />
                        <label for="region">区域 : </label>
                        <select name="newregion" id="region" tabindex="2">
                 
                        </select>
                    
                        <br />
                    
                      </fieldset>
                      <div align="center">
                      <input id="button1" type="submit" value="增加" /> 
                      <input id="button2" type="reset" />
                      </div>
                    </form>

                </div>
               
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
