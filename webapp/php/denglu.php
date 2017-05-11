<?php
header('Access-Control-Allow-Origin:*');
$username = $_POST['username'];

$password = $_POST['password'];

//连接数据库系统
   $link =mysqli_connect("localhost","root","12345678");
   //设置连接编码
   mysqli_set_charset($link,"utf8");
   //选定要使用的数据库
   mysqli_select_db($link, "webapp");
   //$result = mysql_query("select / delete /update / insert / desc /show tables /drop .......");
   $sql='select password from zhuce where username="' . $username . '" ';
   $result = mysqli_query($link, $sql);
	
   while($row=mysqli_fetch_array($result)){
   
    if($password == $row['password']){
      echo '登录成功';
      
    }else{
      echo '失败';
    }

}


?>
