<?php

namespace App;
class home
{
    public $demo1;
    protected $demo2;
    private $demo3;

    public function __construct($demo1, $demo2, $demo3)
    {
        echo $this->demo1 = $demo1;
        echo $this->demo2 = $demo2;
        echo $this->demo3 = $demo3;
    }

//    function getname()
//    {
//        echo "Ban {$this->string2} gia {$this->string3}.";
//    }
}

class hotel extends home
{
    public function gethotel($demo1, $demo2, $demo3)
    {
        echo $this->demo1 = $demo1;
        echo $this->demo2 = $demo2;
//        echo $this->demo3 = $demo3;
    }

}

$obj = new home();
echo $obj->demo1;
//echo $obj->demo2;
//echo $obj->demo3;

$newObj = new hotel();
$newObj->gethotel();
?>