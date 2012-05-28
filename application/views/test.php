<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<script type="text/javascript" src="http://localhost/xszl/js/jquery-1.7.2.min.js">
</script>  
<script language="javascript">  
	$(document).ready(function(){  
  $("#bTrade").click(function(){                                                                                      
    $("#sTrade").load("http://localhost/xszl/index.php/testquery/index");                                    
  });  
});  
</script> 

</head>  


 
<body>  
<label  id="bTrade" onclick="change()"> test </label> 
<br/>

<label  id="sTrade"></label> 
</body>  
</html>  