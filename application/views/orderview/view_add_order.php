<?php
	$this->load->helper('url');
	$cities  = $this->Mod_city->get_all_city();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>XXX����ϵͳ</title>
<link rel="stylesheet" type="text/css" href="http://localhost/xszl/css/theme.css" />
<link rel="stylesheet" type="text/css" href="http://localhost/xszl/css/style.css" />
<link type="text/css" href="http://localhost/xszl/css/custom-theme/jquery-ui-1.8.20.custom.css" rel="Stylesheet" />	
<script type="text/javascript" src="http://localhost/xszl/js/jquery-1.7.2.min.js" ></script>
<script type="text/javascript" src="http://localhost/xszl/js/jquery-ui-1.8.20.custom.min.js" ></script>
<script type="text/javascript" src="http://localhost/xszl/js/jquery-ui-i18n.js"></script>
<script>
  $(document).ready(function() {
	  $("#checkin_date").datepicker(); 
	  $("#checkout_date").datepicker();
	  $("#city").change(function(){                                                                                      
		   $("#region").load("http://localhost/xszl/index.php/hotelcon/con_hotel/select_region/"+ $("#city").val());    
		   $("#hotel").load("http://localhost/xszl/index.php/hotelcon/con_hotel/select_hotel_byCity/"+ + $("#city").val());
		  });  
	  $("#region").change(function(){                                                                                      
		   $("#hotel").load("http://localhost/xszl/index.php/hotelcon/con_hotel/select_hotel_byRegion/"+ $("#region").val());    
		  }); 
  });
  
  jQuery(function($){
      $.datepicker.regional['zh-CN'] = {
           closeText: '�ر�',
           prevText: '<����',
           nextText: '����>',
           currentText: '����',
           monthNames: ['һ��','����','����','����','����','����',
           '����','����','����','ʮ��','ʮһ��','ʮ����'],
           monthNamesShort: ['һ','��','��','��','��','��',
           '��','��','��','ʮ','ʮһ','ʮ��'],
           dayNames: ['������','����һ','���ڶ�','������','������','������','������'],
           dayNamesShort: ['����','��һ','�ܶ�','����','����','����','����'],
           dayNamesMin: ['��','һ','��','��','��','��','��'],
           weekHeader: '��',
           dateFormat: 'yy-mm-dd',
           firstDay: 1,
           isRTL: false,
           showMonthAfterYear: true,
           yearSuffix: '��'};
      $.datepicker.setDefaults($.datepicker.regional['zh-CN']);
});
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
                <br />
                <div id="box">
                	<h3 id="adduser">����</h3>
                    <form id="form" action="<?php echo site_url('ordercon/con_order/insert');?>" method="post">
                      <fieldset id="personal">
                        <legend>������Ϣ</legend>
                        <label for="orderno">���� : </label> 
                        <input name="orderno" id="orderno" type="text" tabindex="1" />
                        <br />
                        <label for="client">�ͻ� : </label>
                        <input name="client" id="client" type="text" 
                        tabindex="2" />
                        <br />
                        <label for="paystate">֧��״̬ : </label>
                        <input type="radio" name="paystate" value="paid"/>  ��֧��&nbsp;&nbsp;
                        <input type="radio" name="paystate" value="pay"/>  δ֧��
                        <br /><br />
                       <label for="paystate">���㷽ʽ : </label>
                        <select name="paystate" tabindex="1">
                        	<option label="�½�" value="0"></option>
                        	<option label="�ս�" value="1"></option>
                        	<option label="���½�" value="2"></option>
                        </select>
                        <br /><br />
                       <label for="����">���� : </label>
                        <select name="city" id="city" tabindex="2">
                        	<option value="0" > δ֪</option>
                            <?php
                            		
                        		foreach($cities as $row)
                        		{
                        			echo '<option value="'.$row->idcity.'" >'.$row->name.'</option>';
                        		} 
                        	 
                            ?>
                        </select>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        ���� �� 
                        <select name="region" id="region" tabindex="2">
                        	<option value="0" selected> ����</option>
                        </select>
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        �Ƶ� :
                        <select name="hotel" id="hotel" tabindex="2">
                        	<option value="0" > δ֪</option>
                        </select>
                  
                        <br /><br />
                        <label for="room_type">���� : </label>
                        <select name="room_type" tabindex="2" tabindex="2">
                        	<option label="XXX" value="0"></option>
                        	<option label="XXX" value="1"></option>
                        	<option label="XXX" value="2"></option>
                        </select>
                        <br /><br />
                        <label for="stay_time">����:</label>
                        <input name="stay_time" id="stay_time" type="text" tabindex="2"/>
                        <br />
                        <label for="room_amount">������:</label>
                        <input name="room_amount" id="room_amount" type="text" tabindex="2"/>
                        <br />
                        <label for="checkin_date">��ס����:</label>
                        <input name="checkin_date" id="checkin_date" type="text" tabindex="2"/>
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        �������: &nbsp;
                        <input name="checkout_date" id="checkout_date" type="text" tabindex="2"/>
                        <br />
                        <label for="uprice">����:</label>
                        <input name="uprice" id="uprice" type="text" tabindex="2"/>
                        <input type="radio" name="uprice_currency" value="CNY"/>&nbsp;�����
                        <input type="radio" name="uprice_currency" value="USD"/>&nbsp;��Ԫ
                        <input type="radio" name="uprice_currency" value="MOP"/>&nbsp;����Ԫ
                        <br />
                        <label for="cprice">��Դ��:</label>
                        <input name="cprice" id="cprice" type="text" tabindex="2"/>
                        <input type="radio" name="cprice_currency" value="CNY"/>&nbsp;�����
                        <input type="radio" name="cprice_currency" value="USD"/>&nbsp;��Ԫ
                        <input type="radio" name="cprice_currency" value="MOP"/>&nbsp;����Ԫ
                        <br />
                        <label for="supplier">��Ӧ��:</label>
                        <input name="supplier" id="supplier" type="text" tabindex="2"/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��Ӧ�̵���: &nbsp;
                        <input name="supplier_no" id="supplier_no" type="text" tabindex="2"/>
                        <br />
                        <label for="supplier_pay">������Ӧ��:</label>
                        <input type="radio" name="supplier_pay" value="paid"/>��֧��
                        <input type="radio" name="supplier_pay" value="pay"/>δ֧��
                        <br />
                        <label for="user_name">ס������:</label>
                        <input name="user_name" id="user_name" type="text" tabindex="2"/>
                        <br />                                
                        <label for="tprice">�ܼ�:</label>
                        <input name="tprice" id="tprice" type="text" tabindex="2"/>
                        <br /> 
                        <label for="staff">������:</label>
                        <input name="staff" id="staff" type="text" tabindex="2"/>
                        <br />   
                        <label for="remark">��ע:</label>
                        <textarea rows="1" cols="1" name="remark" id="staff"></textarea>
                        <br />                                                                
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
