<?php

$folder_path = "upfile2/";
$file_path=$folder_path.$_FILES["upload_file"]["name"];
$flag_ok = true;

$file_type = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
echo $file_type;

$arr = array("jpg", "png", "jpeg", "gif");
if(!in_array($file_type,$arr)){
    $flag_ok = false;
}

//check dung lượng

if($_FILES["upload_file"]["size"]>100000){
    $flag_ok = false;
}

?>