<?php

$folder_path = "upfile2/";
$file_path=$folder_path.$_FILES["upload_file"]["name"];
$flag_ok = true;

$file_type = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
echo $file_type;

//check file có bị trùng hay không

if(file_exists($file_path)){
    $flag_ok = false;
    echo "File đã bị trùng";
}

//check đuôi file

$arr = array("jpg", "png", "jpeg", "gif");
if(!in_array($file_type,$arr)){
    echo "File không đúng định dạng";
    $flag_ok = false;
}

//check dung lượng

if($_FILES["upload_file"]["size"]>100000){
    echo "Dung lượng file quá lớn";
    $flag_ok = false;
}

if($flag_ok){
    move_uploaded_file($_FILES["upload_file"]["tmp_name"], $file_path);
}
else{
    echo "Khong thể up file lên được";
}
?>