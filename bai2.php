<?php 
//cu phap 1
 if(10>9){
    echo "<br>Dung";
 }
//cu phap 2
 if(10>9): echo "<br>Dung";
endif;

//mo ra html
if(10>9):?>
 <h1>Tieu de 1</h1>
 <?php
endif;
?>
<?php
$bien = false;
    if($bien){
    echo "<br>Day la truong hop sai";
} else
    echo "<br>Day la truong hop dung";
    $biena=2;
    switch ($biena){
         case 1:
            echo "<br>Gia tri cua bien la 1";
            break;
        case 2:
            echo "<br>Gia tri cua bien la 2<br>";
            break;
    }

    //isset check bien or du lieu nhap vao co khoi tao hay chua & empty check bien truyen vao co rong hay khoi tao chua

    //TH1
    $bien_0=0;
    $bien_rong="";
    $bien_Khoi_tao;
    $bien_false=false;

    var_dump(isset($bien));
    var_dump(isset($bien_rong));
    var_dump(isset($bien_Khoi_tao));
    var_dump(isset($bien_false));

    //=> tra ve true do duoc khoi tao het roi

    var_dump(isset($bien_chua_khoi_tao));

     //=> tra ve true do chua duoc khoi tao( chua khai bao)
       
    echo"<br>";
    var_dump(empty($bien));
    var_dump(empty($bien_rong));
    var_dump(empty($bien_Khoi_tao));
    var_dump(empty($bien_false));
     //=> tra ve true
    $bien_khong_rong=5;
     if(!empty($bien_khong_rong)==true){
        echo"<br>Thuc hien cau lenh";

        //empty bat loi bat buoc nhap du lieu
        //isset khong bat buoc nhap nhung phai co du lieu de gui
     }

     //vong lap
     for($i=0;$i<=10;$i++){
    echo "<br>Xin chao thu ".$i;
     }
     for($i=0;$i<10;$i++){
        if($i===6){
        continue;
        }
        
        if($i>9){
            break;
        }
        echo "<br>Xin chao thu ".$i;
         }

$bien_x=1;
while ($bien_x<=10){
    echo "<br>Xin chao thu ".$bien_x;
    $bien_x = $bien_x + 1;
}
$mang = array("key1"=>"Quynh", "key2"=>"Trinh", "key3"=>"Mi");
foreach ($mang as $key =>$value)  {
    echo "Ket qua " . $value;
}

array_push($mang, "Han");
foreach ($mang as $key =>$value)  {
    echo "Ket qua " . $value;
}     
$n = array(1,2,3);
array_push($mang, $n);
var_dump($mang);

$mang3 = array_merge($mang, $n);
echo "<br>";
var_dump($mang);

$bien_mau=3;
if(in_array($bien_mau,$mang3))
    echo "Ton tai";
else echo "Khong ton tai";

if(array_key_exists("key1",$mang)){
    echo "<br>Ton tai key";
}
$mang_cat = array_slice($n, 1);
var_dump($mang_cat);
?>
