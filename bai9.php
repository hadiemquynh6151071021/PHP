<?php

//session an toàn hơn cookies

//Tạo session
session_start();
$_SESSION["color"] = "Đỏ";
$s = isset($_SESSION["color"]) ? $_SESSION["color"] : "";
echo $s;

//sửa session
$_SESSION["color"] = "Xanh";
$s = isset($_SESSION["color"]) ? $_SESSION["color"] : "";
echo $s;



//xóa session
session_unset();
session_destroy();

$s = isset($_SESSION["color"]) ? $_SESSION["color"] : "";
echo $s;    //câu lệnh không ra kết quả do xóa hết session rồi
?>