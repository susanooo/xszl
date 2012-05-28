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
           closeText: '关闭',
           prevText: '<上月',
           nextText: '下月>',
           currentText: '今天',
           monthNames: ['一月','二月','三月','四月','五月','六月',
           '七月','八月','九月','十月','十一月','十二月'],
           monthNamesShort: ['一','二','三','四','五','六',
           '七','八','九','十','十一','十二'],
           dayNames: ['星期日','星期一','星期二','星期三','星期四','星期五','星期六'],
           dayNamesShort: ['周日','周一','周二','周三','周四','周五','周六'],
           dayNamesMin: ['日','一','二','三','四','五','六'],
           weekHeader: '周',
           dateFormat: 'yy-mm-dd',
           firstDay: 1,
           isRTL: false,
           showMonthAfterYear: true,
           yearSuffix: '年'};
      $.datepicker.setDefaults($.datepicker.regional['zh-CN']);
});
</script>
<script type="text/javascript">
//非空验证
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
  		if (validate_required(loginname,"用户名不能为空!")==false)
    	{
  	    	loginname.focus();
  	    	return false
  		}
  		if (validate_required(name,"真实姓名不能为空!")==false)
    	{
  	    	name.focus();
  	    	return false
  		}
  		if (validate_required(pwd,"密码不能为空!")==false)
    	{
  	    	pwd.focus();
  	    	return false
  		}
  		if (validate_password(pwd,pwd2,"密码不一致，请重新输入")==false)
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
                	<h3 id="adduser">订单</h3>
                    <form id="form" action="<?php echo site_url('ordercon/con_order/insert');?>" method="post">
                      <fieldset id="personal">
                        <legend>必填信息</legend>
                        <label for="orderno">单号 : </label> 
                        <input name="orderno" id="orderno" type="text" tabindex="1" />
                        <br />
                        <label for="client">客户 : </label>
                        <input name="client" id="client" type="text" 
                        tabindex="2" />
                        <br />
                        <label for="paystate">支付状态 : </label>
                        <input type="radio" name="paystate" value="paid"/>  已支付&nbsp;&nbsp;
                        <input type="radio" name="paystate" value="pay"/>  未支付
                        <br /><br />
                       <label for="paystate">结算方式 : </label>
                        <select name="paystate" tabindex="1">
                        	<option label="月结" value="0"></option>
                        	<option label="日结" value="1"></option>
                        	<option label="半月结" value="2"></option>
                        </select>
                        <br /><br />
                       <label for="城市">城市 : </label>
                        <select name="city" id="city" tabindex="2">
                        	<option value="0" > 未知</option>
                            <?php
                            		
                        		foreach($cities as $row)
                        		{
                        			echo '<option value="'.$row->idcity.'" >'.$row->name.'</option>';
                        		} 
                        	 
                            ?>
                        </select>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        区域 ： 
                        <select name="region" id="region" tabindex="2">
                        	<option value="0" selected> 所有</option>
                        </select>
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        酒店 :
                        <select name="hotel" id="hotel" tabindex="2">
                        	<option value="0" > 未知</option>
                        </select>
                  
                        <br /><br />
                        <label for="room_type">房型 : </label>
                        <select name="room_type" tabindex="2" tabindex="2">
                        	<option label="XXX" value="0"></option>
                        	<option label="XXX" value="1"></option>
                        	<option label="XXX" value="2"></option>
                        </select>
                        <br /><br />
                        <label for="stay_time">天数:</label>
                        <input name="stay_time" id="stay_time" type="text" tabindex="2"/>
                        <br />
                        <label for="room_amount">房间数:</label>
                        <input name="room_amount" id="room_amount" type="text" tabindex="2"/>
                        <br />
                        <label for="checkin_date">入住日期:</label>
                        <input name="checkin_date" id="checkin_date" type="text" tabindex="2"/>
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        离店日期: &nbsp;
                        <input name="checkout_date" id="checkout_date" type="text" tabindex="2"/>
                        <br />
                        <label for="uprice">单价:</label>
                        <input name="uprice" id="uprice" type="text" tabindex="2"/>
                        <input type="radio" name="uprice_currency" value="CNY"/>&nbsp;人民币
                        <input type="radio" name="uprice_currency" value="USD"/>&nbsp;美元
                        <input type="radio" name="uprice_currency" value="MOP"/>&nbsp;澳门元
                        <br />
                        <label for="cprice">来源价:</label>
                        <input name="cprice" id="cprice" type="text" tabindex="2"/>
                        <input type="radio" name="cprice_currency" value="CNY"/>&nbsp;人民币
                        <input type="radio" name="cprice_currency" value="USD"/>&nbsp;美元
                        <input type="radio" name="cprice_currency" value="MOP"/>&nbsp;澳门元
                        <br />
                        <label for="supplier">供应商:</label>
                        <input name="supplier" id="supplier" type="text" tabindex="2"/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;供应商单号: &nbsp;
                        <input name="supplier_no" id="supplier_no" type="text" tabindex="2"/>
                        <br />
                        <label for="supplier_pay">付给供应商:</label>
                        <input type="radio" name="supplier_pay" value="paid"/>已支付
                        <input type="radio" name="supplier_pay" value="pay"/>未支付
                        <br />
                        <label for="user_name">住客姓名:</label>
                        <input name="user_name" id="user_name" type="text" tabindex="2"/>
                        <br />                                
                        <label for="tprice">总价:</label>
                        <input name="tprice" id="tprice" type="text" tabindex="2"/>
                        <br /> 
                        <label for="staff">经手人:</label>
                        <input name="staff" id="staff" type="text" tabindex="2"/>
                        <br />   
                        <label for="remark">备注:</label>
                        <textarea rows="1" cols="1" name="remark" id="staff"></textarea>
                        <br />                                                                
                      </fieldset>
                      <div align="center">
                      <input id="button1" type="submit" value="提交" /> 
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
