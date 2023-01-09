<?php
// print(có trả về kq, có thể gán cho biến khác), echo (không trả về kq)

//printf(int theo định dạng kiểu dữ liệu)
$str = "Hello";
printf("Đây là %s", $str);

//print_r (cho xem cả code)

echo "<br>";

$arr = array(1,2);
print_r($arr);

echo "<br>";

print_r(new class ("Đỏ", 4) {
    public $mau_sac;
    public $so_chan;
    public function __construct($mau_sac, $so_chan)
    {
        $this->mau_sac = $mau_sac;
        $this->so_chan = $so_chan;
    }
    public function show()
    {
        echo $this->mau_sac . "và" . $this->so_chan;
    }
});

echo "<br>";

$s = "Chuỗi 1, Chuỗi 2, Chuỗi 3";
$kq = explode(",", $s, 3); //tách chuỗi dựa và dấu phẩy, chuỗi s, thành 3 phần
var_dump($kq);

echo "<br>";

$n = implode(",", $kq); //nối các chuỗi lại với nhau, thêm dấu phẩy tại vị trí nối
echo $n;

echo "<br>";

$new = "123456";
$kqnew = str_split($new); // cắt chuỗi thành các phần nhỏ
var_dump($kqnew);

echo "<br>";

$new = str_replace("3", "10",$new); // thay thế ký tự 3 thành 10
echo $new;

echo "<br>";

$find=array(1,4,6);
$replace=array(20,20,20);
$new = str_replace($find,$replace,$new); //thay thế hàng loạt ký tự
echo $new;

echo "<br>";

$repeat = "Hello";
$repeat = str_repeat($repeat, 5); //lặp lại chuỗi 5 lần

echo $repeat;

echo "<br>";

$sub = "I love you";
$sub = substr($sub, 2,5); //lấy chuỗi con từ vị trí ký tự thứ 2 tới 5 ( nếu không có tham số cuối thì lấy đến hết)
echo $sub;

echo "<br>";

$cut = "I love you";
$cut = strstr($cut, "ve"); //cũng cắt chuỗi nhưng tìm theo theo ký tự để cắt. nếu stristr() là không phân biết chữ hoa thường
echo $cut;

echo "<br>";



?>