<?php
$upFilePath = "photo/";
  $ok=@move_uploaded_file($_FILES['img']['tmp_name'],$upFilePath);
if($ok === FALSE){
 echo json_encode('file_infor'=>'上传失败');
}else{
 echo json_encode('file_infor'=>'上传成功');
}

?>
