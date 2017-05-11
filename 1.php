<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
*{
  margin: 0;
  padding: 0;
}
	</style>

</head>
<body>


<?php
//连接数据库系统
   $link =mysql_connect("localhost","root","12345678");
   //设置连接编码
   mysql_query("set names utf8");
   //选定要使用的数据库
   mysql_query("use tab");
   //$result = mysql_query("select / delete /update / insert / desc /show tables /drop .......");
   $result = mysql_query("insert into tab_int2 (f1, f2, f3) values(1,12,45)");
	if($result ===false){
		echo "执行失败，请参考：" .mysql_error();
	}else{
		echo "执行成功！";
	}


?>







	<script>
	
	</script>
</body>
</html>