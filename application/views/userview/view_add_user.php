<?php
	$this->load->helper('url');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>XXX����ϵͳ</title>
<link rel="stylesheet" type="text/css" href="http://localhost/xszl/css/theme.css" />
<link rel="stylesheet" type="text/css" href="http://localhost/xszl/css/style.css" />
<script>
   var StyleFile = "theme" + document.cookie.charAt(6) + ".css";
   document.writeln('<link rel="stylesheet" type="text/css" href="http://localhost/xszl/css/' + StyleFile + '">');
</script>

<script type="text/javascript">
//�ǿ���֤
function validate_required(field,alerttxt)
{
	with (field)
  	{
  		if (value==null||value=="")
    		{
    			alert(alerttxt);
    			return false
    		}
  		else 
  	  		{
  	  			return true
  	  		}
  	}
}
//������֤(һ��)
function validate_password(field1,field2,alerttxt)
{
	with (field2)
  	{
  		if (field2.value != field1.value)
    		{
    			alert(alerttxt);
    			return false
    		}
  		else 
  	  		{
  	  			return true
  	  		}
  	}
}

function validate_form(thisform)
{
	with (thisform)
  	{
  		if (validate_required(loginname,"�û�������Ϊ��!")==false)
    	{
  	    	loginname.focus();
  	    	return false
  		}
  		if (validate_required(name,"��ʵ��������Ϊ��!")==false)
    	{
  	    	name.focus();
  	    	return false
  		}
  		if (validate_required(pwd,"���벻��Ϊ��!")==false)
    	{
  	    	pwd.focus();
  	    	return false
  		}
  		if (validate_password(pwd,pwd2,"���벻һ�£�����������")==false)
  		{
			pwd2.focus();
			return false;
  	  	}

	}
}

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
                	<h3 id="adduser">����û�</h3>
                    <form id="form" onsubmit="return validate_form(this)" action="<?php echo site_url('usercon/con_user/insert');?>" method="post">
                      <fieldset id="personal">
                        <legend>������Ϣ</legend>
                        <label for="loginname">�û��� : </label> 
                        <input name="loginname" id="lastname" type="text" tabindex="1" /><font color="red" size="2">&nbsp;*</font>
                        <br />
                        <label for="name">��ʵ���� : </label>
                        <input name="name" id="firstname" type="text" 
                        tabindex="2" /><font color="red" size="2">&nbsp;*</font>
                        <br />
                        <label for="pass">���� : </label>
                        <input name="pwd" id="pass" type="password" 
                        tabindex="2" /><font color="red" size="2">&nbsp;*</font>
                        <br />
                        <label for="pass-2">������������ : </label>
                        <input name="pwd2" id="pass-2" type="password" 
                        tabindex="2" /><font color="red" size="2">&nbsp;*</font>
                        <br />
                      </fieldset>
                      <fieldset id="address">
                        <legend>ѡ����Ϣ</legend>
                        <label for="qq">QQ : </label> 
                        <input name="qq" id="street" type="text" 
                        tabindex="1" />
                        <br />
                        <label for="phone">�绰 : </label>
                        <input name="phone" id="tel" type="text" 
                        tabindex="2" />
                      </fieldset>
                      <fieldset id="opt">
                        <legend>Ȩ�޹���</legend>
                        <label for="choice">ѡ��Ȩ��: </label>
						<input name="auths[]" value="�Ƶ����" type="checkbox" />�Ƶ����&nbsp;&nbsp;
						<input name="auths[]" value="�û�����" type="checkbox" />�û�����&nbsp;&nbsp;
						<input name="auths[]" value="�������" type="checkbox" />�������
                      </fieldset>
                      <div align="center">
                      <input id="button1" type="submit" value="�ύ" /> 
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
