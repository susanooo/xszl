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
                <div id="box">
                <?php

	$query = $this->Mod_user->show_user_byId($this->uri->segment(4));
	$row = $query->row();
?>
                	<h3 id="edituser">修改用户</h3>
                    <form id="form" action="<?php echo site_url('usercon/con_user/update/'.$this->uri->segment(4));?>" method="post">
                      <fieldset id="personal">
                        <legend>必填信息</legend>
                        <label for="loginname">用户名 : </label> 
                        <input name="loginname" id="lastname" type="text" tabindex="1" value="<?php echo $row->loginname;?>" />
                        <br />
                        <label for="name">真实姓名 : </label>
                        <input name="name" id="firstname" type="text" 
                        tabindex="2" value="<?php echo $row->name;?>"/>
                        <br />
                        <label for="pass">密码 : </label>
                        <input name="pwd" id="pass" type="password" 
                        tabindex="2" />
                        <br />
                        <label for="pass-2">重新输入密码 : </label>
                        <input name="pwd2" id="pass-2" type="password" 
                        tabindex="2" />
                        <br />
                      </fieldset>
                      <fieldset id="address">
                        <legend>选填信息</legend>
                        <label for="qq">QQ : </label> 
                        <input name="qq" id="street" type="text" 
                        tabindex="1" value="<?php echo $row->qq;?>"/>
                        <br />
                        <label for="phone">电话 : </label>
                        <input name="phone" id="tel" type="text" 
                        tabindex="2" value="<?php echo $row->phone;?>"/>
                      </fieldset>
                      <div align="center">
                      <input id="button1" type="submit" value="更改" /> 
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
