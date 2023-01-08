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
?>