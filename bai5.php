<?php

    //trait
    trait Trait1{
        function say_hello(){
        echo "<br>Hello";
        }
    }
    trait Trait2{
        function say_goodbye(){
        echo "<br>Goodbye";
        }
    }
    trait Trait3{
        function say_goodbye(){
        echo "<br>Goodbye trait3";
        }
    }
    trait Trait4{
        function say5(){
        echo "<br>say 5";
        }
    }
    class Trait_example{
    use Trait1;
    use Trait2,Trait3{
        Trait3::say_goodbye insteadof Trait2;
    }
    use Trait4{
        //để protected hoặc private không chạy được
        say5 as public ex_say;
    }
    }
$t = new Trait_example;
$t->say_hello();
$t->say_goodbye();
$t->say_goodbye();
$t->ex_say();

//anonymous class
echo "<pre>";
var_dump(new class ("Đỏ",4){
    public $mau_sac;
    public $so_chan;
    public function __construct($mau_sac,$so_chan){
        $this->mau_sac = $mau_sac;
        $this->so_chan = $so_chan;
    }
    public function show(){
        echo $this->mau_sac."và".$this->so_chan;
    }
});
echo "</pre>";

//self(ngay tại class này) this(ngay tại đối tượng này)

class Ban{
    public $mau_sac;
    public $so_chan;
    public function __construct($mau_sac,$so_chan){
        $this->mau_sac = $mau_sac;
        $this->so_chan = $so_chan;
    }
    public function show(){
        echo $this->mau_sac." và ".$this->so_chan;
    }
    public function re_show(){
       $this->show();
        //self::show();
    }
}
$ban = new Ban("Nâu",4);
$ban->re_show();

class Ban2 extends Ban
{
    public $chat_lieu;
    public function __construct($mau_sac,$so_chan,$chat_lieu)
    {
        parent::__construct($mau_sac,$so_chan);
        $this->chat_lieu = $chat_lieu;
    }
    public function show()
    {
        parent::show();
        echo " chất liệu {$this->chat_lieu}";
    }
}
echo "<pre>";
$ban2 = new Ban2("Nâu",4,"Gỗ");
$ban2->show();
echo "</pre>";
$ban2->re_show();

//self: self class nào sử dụng g=hàm sau self của class đó
//this: sử dụng hàm của đối tượng chứ không sử dụng hàm của đối tượng cha. Của đối tượng nào đối tượng đó sử dụng

class Ban3{
    public static $mes = "Đây là bàn";
    public static function show(){
        //echo $this->mes; ( không sử dụng được do static khi sử dụng hàm không tạo đối tượng)
        echo self::$mes;
    }
}
echo"<br>";
Ban3::show();
?>