<?php

//kết nối
$connect = mysqli_connect("localhost", "mysqli2", "Quynh1604", "mysqli2");

//tạo bảng
// $sql = "CREATE TABLE `mysqli2`.`user` (`Id` INT UNSIGNED NOT NULL AUTO_INCREMENT , `Username` VARCHAR(50) NULL DEFAULT NULL , `Password` VARCHAR(20) NULL DEFAULT NULL , `Email` VARCHAR(50) NULL DEFAULT NULL , PRIMARY KEY (`Id`)) ENGINE = InnoDB;";
// mysqli_query($connect, $sql);

//thêm dữ liệu

// $sql = "INSERT INTO user(username,password,email) values ('def',123,123)";

//sửa dữ liệu

$sql_update = "update user set username='a', password='a',email='a' where id=1";
mysqli_query($connect, $sql_update);

//truy vấn
$sql = "select * from user";

$tmp=mysqli_query($connect, $sql);
var_dump($tmp); //ra 1 khối kết quả

//tiến hành bóc tách dữ liệu
$arr = [];

if(mysqli_num_rows($tmp)>0){
    while ($row=mysqli_fetch_assoc($tmp)){
            array_push($arr, $row);
    }
}
else{
    echo "Không có dữ liệu";
}

mysqli_close($connect);

echo"<pre>";
var_dump($arr);
echo "</pre>";

?>