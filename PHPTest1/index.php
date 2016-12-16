<?php 

/*
 * 1.打印基本的的hello world
 */
// 	echo "hello world";


/*
 * 局部和全局作用域
 */
// 	echo "<p>全局变量</p>";
// 	$x = 5;//全局变量
// 	function myTest() {
// 		$y = 10;
// 		echo "<p>测试函数内部变量</p>";
// 		echo "变量y $y ";
// 		echo "变量x 为 $x";
		
// 	}
// 	echo "<p>运行函数</p>";
// 	myTest();
// 	echo "<p>函数的结果：只能打印出y的值，不能打印x的值因为x在函数内部为全局变量必须用关键字global声明</p>";
// 	echo "<p>测试外变量</p>";
// 	echo "变量x 为:$x";
	
	/*
	 * 2
	 */
// 	echo "<p>改进方法</p>";
// 	$x = 5;
// 	$y = 10;
// 	function myTest() {
// 		global $x,$y;
// 		$y = $x + $y;
// 	}
	
// 	echo "dfdfd";
// 	echo "<p>运行函数</p>";
// 	myTest();
// 	echo $y;
// 	echo "<p>这样就能正确的使用全局变量了</p>";

// 	echo "<p>php 类定义</p>";
// 	Class Site {
// 		//成员变量
// 		var $url;
// 		var $title;
		
// 		//成员函数
// 		function setUrl($url) {
// 			$this->url = $url;
// 		}
		
// 		function getUrl() {
// 			echo $this->url.PHP_EOL;
// 		}
		
// 		function setTitle($title) {
// 			$this->title = $title;
// 		}
		
// 		function getTitle() {
// 			echo $this->title.PHP_EOL;
// 		}
// 	}
	
// 	$runboo = new Site();
// 	$runboo->setUrl("www.runoob.com");
// 	$runboo->setTitle("菜鸟教程");
// 	$runboo->getTitle();
// 	$runboo->getUrl();

	/*
	 * 3
	 */
// 	echo "<p>php数据库的连接---面向对象--</p>";
// 	$host = "localhost";
// 	$user = "root";
// 	$password = "";
	
// 	$conn = new mysqli($host, $user, $password);
// 	if ($conn->connect_error) {
// 		die("连接失败 ".$conn->connect_error);
// 	}
// 	echo "连接成功";

// 	echo "<p>php数据库的连接---面向过程--</p>";
// 	$host = "localhost";
// 	$user = "root";
// 	$password = "";

// 	$conn = mysqli_connect($host, $user, $password);
// 	if (!$conn) {
// 		die("连接失败 ".$conn->connect_error);
// 	}
// 	echo "连接成功";
	
// 	echo "<p>php数据库的连接---pdo--</p>"
// 	$servername = "localhost";
// 	$username = "root";
// 	$password = "root";
	
// 	try {
// 		$conn = new PDO("mysql:host=$servername;dbname=1509tp", $username, $password);
// 		echo "连接成功";
// 	}
// 	catch(PDOException $e)
// 	{
// 		echo $e->getMessage();
// 	}

	/*
	 * 定义一个常量
	 */
// 	echo "<p>定义一个常量</p>";
// 	define('PI', 3.1415);
// 	echo PI;

	/*
	 * 时间戳
	 */
// 	$time = time();
// 	echo $time;

	/*
	 * var_dump使用
	 */
// 	$str = "dfd";
// 	var_dump($str);

	/*
	 * 
	 * 系统预定义常量
	 */
// 	echo PHP_OS; echo "<br/>";
// 	echo PHP_VERSION; echo "<br/>";
// 	echo PHP_INT_SIZE; echo "<br/>";
// 	echo PHP_INT_MAX; echo "<br/>";
// 	echo __FILE__; echo "<br/>";
// 	echo __LINE__; echo "<br/>";
// 	echo __DIR__; echo "<br/>";

	/*
	 * 
	 * 定义函数
	 */
// 	function myfunc () {
// 		//获取当前的函数名
// 		return __FUNCTION__;
// 	}
// 	//调用函数
// 	echo myfunc();

	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
		
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	