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
var_dump($t);
echo "</pre>";
?>