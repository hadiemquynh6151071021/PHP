<?php

// $myfile = fopen("File1.txt", "r");       // mở file để đọc
// $content = fread($myfile, filesize("File1.txt"));
// echo $content;

// $myfile = fopen("File1.txt", "w");       //mở file để viết
// $noi_dung = "Đây là chế độ viết w";
// fwrite($myfile, $noi_dung);

// $myfile = fopen("File1.txt", "a");       //ghi vào vẫn giữ nội dung file cũ
// $noi_dung = "Đây là chế độ viết a";
// fwrite($myfile, $noi_dung);

// $myfile = fopen("File2.txt", "a");       //ghi vào vẫn giữ nội dung file cũ nhưng nếu file chưa tồn tại thì tạo file
// $noi_dung = "Đây là chế độ viết a";
// fwrite($myfile, $noi_dung);

// $myfile = fopen("File3.txt", "x");      //tạo file mới chỉ để ghi
// $noi_dung = "Đây là chế độ viết x";
// fwrite($myfile, $noi_dung);

//sử dụng xong phải đóng file

//fclose($myfile);

//lấy nhanh nội dung file
// $content = file_get_contents("File1.txt");
// echo $content;

$content = "Đây là nội dung put content";
file_put_contents("File2.txt", $content);

?>