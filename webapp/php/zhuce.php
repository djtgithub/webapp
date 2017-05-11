<?php
header('Access-Control-Allow-Origin:*');
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

//连接数据库系统
   $link =mysqli_connect("localhost","root","12345678");
   //设置连接编码
   mysqli_set_charset($link,"utf8");
   //选定要使用的数据库
   mysqli_select_db($link, "webapp");
   //$result = mysql_query("select / delete /update / insert / desc /show tables /drop .......");
   $sql="insert into zhuce (username, email, password) values ('$username', '$email', '$password')";
   $result = mysqli_query($link, $sql);
	if($result ===false){
		echo "执行失败，请参考：" .mysql_error();

      
	}else{
		echo "success";
     
	}


?>
