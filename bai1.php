<?php
$bien = 1; //bien toan cau
//echo $bien;

//var_dump($bien);

//ten bien bat dau bang $
//chua _ va chu
// $ten_bien
// $TenBien
// class DayLaClass


//bien phan biet chu hoa va thuong
//class va lenh khong phuong biet hoa thuong
define('Hang', 18, false);
var_dump(Hang);
echo "<br>";

//pham vi cua bien
    //toan cau

/*
function myTest(){
    echo "<p>Gia tri bien 1 la $bien </p>";
}
myTest();
*/

// => bien taon cuc chi su dung ben ngoai ham khong su dung ben trong ham

    //dia phuong
function myTest(){
    $a = 1;
    echo "Gia tri cua bien a la: $a";
}
myTest();

//cach su dung bien toan cau ben trong ham su dung global

$x = 5;
$y = 10;
 function tinhtoan1(){
    global $x, $y;
    $y = $x + $y;
 }
echo "<br>Gia tri cua bien y la: $y";

//luu tru bien toan cuc duoi dang mang
function tinhtoan2() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
  }
  echo "<br>Gia tri cua bien y la: $y";

  // giu lai gia tri cua bien dia phuong de tinh toan (thong thuong se tu dong xoa di)
  function tinhtoan3() {
    static $x = 0;
    echo "<br>$x";
    $x++;
  }
  
  tinhtoan3();
  tinhtoan3();
  tinhtoan3();

  //mang trong php
$mang = array("Quynh", "Trinh", "Mi");
var_dump($mang);

//gan co dieu kien
$b = ($bien < 3) ? 5 : 10;
echo "<br>$b";

$m = $m ?? "Khong co gia tri";
echo "<br>$m";
$m = 2;
$m = $m ?? "Khong co gia tri";
echo "<br>$m";
?>