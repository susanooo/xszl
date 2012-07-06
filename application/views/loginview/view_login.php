<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Users - Admin Template</title>
<link rel="stylesheet" type="text/css" href="http://localhost/xszl/css/theme.css" />
<link rel="stylesheet" type="text/css" href="http://localhost/xszl/css/style.css" />
<script>
   var StyleFile = "theme" + document.cookie.charAt(6) + ".css";
   document.writeln('<link rel="stylesheet" type="text/css" href="http://localhost/xszl/css/' + StyleFile + '">');
</script>
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="css/ie-sucks.css" />
<![endif]-->
</head>

<body>
	<div id="container">
    	<div id="header">
        	<h2>XXX管理系统</h2>
      </div>
      <div id="topmenu"><br></br></div>

       <div id="wrapper">
            <div id="content">
                <br />
                <div id="box">
                	<center><h3 id="adduser">用户登陆</h3></center>
                    <form id="form" action="http://localhost/xszl/index.php/logincon/con_login/verify" method="post">
                      <fieldset id="personal">
                      <br />
                       <label for="lastname">用户名 : </label> 
                        <input name="loginname" id="lastname" type="text" tabindex="1" size="30"/>
                        <br />
                        <label for="pass">密码 : </label>
                        <input name="pwd" id="pass" type="password" 
                        tabindex="2" size="30"/>
                        <br />
                      </fieldset>
                      <div align="center">
                      <input id="button1" type="submit" value="登陆" /> 
                      <input id="button2" type="reset" />
                      </div>
                    </form>

                </div>
            </div>
      </div>

        <div id="footer">
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

