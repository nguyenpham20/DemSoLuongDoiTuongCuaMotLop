# DemSoLuongDoiTuongCuaMotLop
Mã nguồn lớp Application:

<?php
class Application {
    private $name;
    public static $count = 0;

    public function __construct($name)
    {
        $this->name = $name;
        self::$count++;
    }

    public function __toString()
    {
        return 'Application name: '. $this->name;
    }
}

echo "Total objects count: ". Application::$count ."<br/>";
$app1 = new Application('App One');
echo "Total objects count: ". Application::$count ."<br/>";
$app2 = new Application('App Two');
echo "Total objects count: ". Application::$count ."<br/>";
echo $app1 .'<br/>';
echo $app2 .'<br/>';
Kết quả hiển thị:

Total objects count: 0
Total objects count: 1
Total objects count: 2
Application name: App One
Application name: App Two
Trong ví dụ trên, biến $count là một biến static, được sử dụng để đếm số lượng các đối tượng được sinh ra.

Bên trong hàm __construct(), biến $count được tăng lên 1 đơn vị, có nghĩa là biến $count sẽ tăng thêm khi có đối tượng mới được tạo ra.

Ở kịch bản bên dưới, số lượng các đối tượng của lớp Application được in ra lần lượt sẽ là 0, 1, 2.
