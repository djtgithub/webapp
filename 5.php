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
   $sql1="select * from message";
   $result=mysql_query($sql1);
   if($result === false){
   	echo "执行失败，请参考：" .mysql_error();
   }else{
   	//此时$result就是‘结果集’（数据集）
   		echo "执行成功！ 数据如下：";
      echo "<table border='1'>";


  echo "<tr>";
        echo "<td>id</td>";
        echo "<td>姓名</td>";
        echo "<td>年龄</td>";
        echo "<td>简介</td>";
        echo "</tr>";




	   	while( $rec = mysql_fetch_array( $result )){
	   		//mysql_fetch_array会去除该结果集中的"一行数据"，并返回数据后赋值给$rec；
	   		//此$rec就是一个数组，其下标就是字段名；
	   		//在此while循环中，mysql_fetch_array()会一次次（一行行）取出结果集中的所有数据；
	   		echo "<tr>";
        echo "<td>" . $rec['id'] . "</td>";
	   		echo "<td>" . $rec['name'] . "</td>";
	   		echo "<td>" . $rec['age'] . "</td>";
        echo "<td>" . $rec['cont'] . "</td>";
       
        echo "</tr>";

       
         /* fetch函数的3种形式辨析
         假设mysql_query("select id, age, name")的执行结果为$result,表如下所示
         id      name       age
          1      user1      18
          2      user2      28
          4      user3      38
          $result=mysql_query("select id, age, name");
         mysql_fetch_assoc($result);得到的数组类似这样:
              array("id" =>1, "name"=>"user1" ,"age"=>18);

         mysql_fetch_row($result);得到的数组类似这样:
              array(0 =>1, 1=>"user1" ,2=>18);

         mysql_fetch_array($result);得到的数组类似这样:
              array("id" =>1, "name"=>"user1" ,"age"=>18,0 =>1, 1=>"user1" ,2=>18);
         */ 
	   	}
       echo "</table>";
   }


?>







	<script>
	
	</script>
</body>
</html>