<?php
/**
 * Created by PhpStorm.
 * User: yt
 * Date: 16/1/23
 * Time: 下午10:29
 */
phpinfo();
//$mem = new Memcache;
//$mem->connect("127.0.0.1", 11211);
//$mem->set('key', 'This is a test!', 0, 60);
//$val = $mem->get('key');
//echo $val;

//
//class A
//{
//    public $name;
//
//    public function __Construct($name,$des)
//    {
//        $this->name = $name.','.$des;
//    }
//    public function aa()
//    {
//       echo $this->name;
//        echo '333';
//    }
//}
//
//$class = new ReflectionClass('A');
//
//$aaa = $class->newInstanceArgs(['www.tantengvip.com','blog']);
//
//$aaa->aa();
class Test{
    protected $name;
    private $id;

    public function __construct()
    {

    }

    public function getId()
    {
        return $this->name;
    }

    public  function Echot(){
        echo 'Echo ing...';
    }
}
echo '3';
$class = new ReflectionClass('Test');
$instance = $class->newInstanceArgs();
//var_dump($instance);
//var_dump($class->getProperties());
//$instance->Echot();
$ec =$class->getMethod('Echot');
$ec->invoke($instance);