<?php
//khai bao mot lop
class Application {
    //khoi tao thuoc tinh
    private $name;
    //
    public static $count = 0;
//Dinh nghia ham khoi tao
    public function __construct($name)
    {
        //goi den gia tri cua thang vua khoi tao
        $this->name = $name;
        self::$count++;
    }
//
    public function __toString()
    {
        return "Application name:" .$this->name;
    }
}
//Hien thi
echo "Total object count: ".Application::$count . "<br/>";

$app1 = new Application('App one');
echo "Total object count:" .Application::$count."<br/>";
$app2 = new Application('App two');
echo "Total object count: " .Application::$count. "<br/>";
echo $app1."<br/>";
echo $app2;
?>
