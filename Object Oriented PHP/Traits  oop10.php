<?php 

// trait is used to create common methods  in differents calss 

trait Trait1{
    public function test(){
        echo "This is test function from trait <br>";
    }
}

trait Trait2{
    public function testing(){
        echo "This is testing <br>";
    }
}


// use trait in class 
class Main{
    use Trait1,Trait2;

}

class Main1{
    use Trait1;
}


$m = new Main();
$m->test();
$m->testing();

?>