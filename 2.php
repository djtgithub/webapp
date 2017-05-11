<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>2.php</title>
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
   $sql1="select * from tab_int2;";
   $result=mysql_query($sql1);
   if($result === false){
   	echo "执行失败，请参考：" .mysql_error();
   }else{
   	//此时$result就是‘结果集’（数据集）
   		echo "执行成功！ 数据如下：";
	   	while( $rec = mysql_fetch_array( $result )){
	   		//mysql_fetch_array会去除该结果集中的"一行数据"，并返回数据后赋值给$rec；
	   		//此$rec就是一个数组，其下标就是字段名；
	   		//在此while循环中，mysql_fetch_array()会一次次（一行行）取出结果集中的所有数据；
	   		echo "<br/> f1：" .$rec['f1'];
	   		echo "———— f2：" .$rec['f2'];
	   		echo "———— f3：" .$rec['f3'];
	   	}
   }


?>







	<script>
	
	</script>
</body>
</html>