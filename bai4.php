<?php
    class Table{
    public $mau_sac;
    public $so_chan;
    public function __construct($mau_sac,$so_chan){
        $this->mau_sac=$mau_sac;
        $this->so_chan=$so_chan;
    }
    public function show(){
        echo "Ghế có màu {$this->mau_sac} và {$this->so_chan} chân";    
    }
    }
$table = new Table("Trắng",4);
echo "<pre>";
var_dump($table);
echo "</pre>";

class Table2{
    protected $mau_sac;
    protected $so_chan;
    public function __construct($mau_sac,$so_chan){
        $this->mau_sac=$mau_sac;
        $this->so_chan=$so_chan;
    }
    public function show(){
        echo "Ghế có màu {$this->mau_sac} và {$this->so_chan} chân";    
    }
    }

    $table_2 = new Table2("Đỏ",4);
    echo "<pre>";
    $table_2->show();
    echo "</pre>";

    //kế thừa
    class Table3 extends Table2{
    public $chat_lieu;
    public function __construct($mau_sac, $so_chan,$chat_lieu){
        $this->mau_sac = $mau_sac;
        $this->so_chan = $so_chan;
        $this->chat_lieu = $chat_lieu;
    }
    public function show(){
        parent::show();
        echo " Ghế làm bằng {$this->chat_lieu}";    
    }
    }
    $table_3 = new Table3("Đen",4,"Gỗ");
    echo "<pre>";
    $table_3->show();
    echo "</pre>";

    //static class không cần tạo đối tượng cũng sử dụng được
    class Table4{
    public static $thoi_tiet="Mưa";
    public static function show(){
        echo "Trời đang mưa";
    }
    }

    //$table_4 = new Table4("Mưa");
    echo "<pre>";
    Table4::show();
    echo "</pre>";

    //abstract và interface
    abstract class Abs{
    public $mau_sac;
    public function show(){
        echo "Hello";
    }
    }
    class Table5 extends Abs{
    // public function show(){
    //         echo "Hello";
    // }
    }
    interface In_class{
        public function show();
    }
    $table5=new Table5();
    echo "<pre>";
    $table5->show();
    echo "</pre>";

    //implements interface thì phải viết lại hết các hàm
    class Table6 implements In_class{
        public function show(){
        echo "Bàn";
        }
    }
?>