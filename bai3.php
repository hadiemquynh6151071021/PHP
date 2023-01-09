<?php
    function ham1(){
    echo "Đây là một hàm<br>";
    }
ham1();

echo "<br>";

function ham_co_tham_so($tham_so){
    echo "Tham số là: $tham_so";
}
ham_co_tham_so(2);

echo "<br>";

//hàm tham số măc định dùng để set giá trị mặc định khi người dùng không nhập thông tin trên yêu cầu
function ham_co_tham_so_mac_dinh($tham_so="Giá trị mặc định"){
    echo "Tham số mặc định là: $tham_so";
}
ham_co_tham_so_mac_dinh(4);

echo "<br>";

//tham trị(không đổi khi xong) tham chiếu(thay đổi khi xong)
$bien = 5;
function ham_tham_tri($tham_tri){
    $tham_tri++;
    echo "$tham_tri";
}
ham_tham_tri($bien);
echo "$bien";
echo "<br>";

function ham_tham_chieu(&$tham_chieu){
    $tham_chieu++;
    echo "$tham_chieu";
}

ham_tham_chieu($bien);
echo "$bien";

echo "<br>";

//hàm ano
$bien_ano = function () {
    echo "Đây là hàm ano<br>";
};
$bien_ano();

$temp=10;
$bien_ano_arr = [
    "key1" => function () {
        echo "<br>Hàm ano 1<br>";
    },
    "key2" => function ($tham_so = 1) {
        $tham_so++;
        echo "<br>Hàm ano 2 $tham_so";
    },
    "key3" => function ($tham_so = 1) {
        $tham_so++;
        echo "<br>Hàm ano 3 $tham_so";
    }
];

$bien_ano_arr["key1"]();
$bien_ano_arr["key2"]($temp);
$bien_ano_arr["key3"]($temp);
?>