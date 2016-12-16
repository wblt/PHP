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

	
	/*
	 * 比较运行符
	 */
// 	$a = 3;
// 	$b = 3.0;
// 	//等号比较
// 	var_dump($a == $b);
	
// 	//比较，值和类型
// 	var_dump($a===$b);

	/*
	 * 移位运算符
	 */
// 	$a = 8;
// 	//右移运算符 将原来的结果除以2
// 	var_dump($a>>1);
	
// 	//左移运算符，将原来的结果乘以2
// 	var_dump($a<<1);

	/*
	 * switch 语句
	 */
// 	$day = 1;
// 	switch ($day) {
// 		case 1:
// 		{
// 			echo "星期1";
// // 			break;	
// 		}
// 		case 2:
// 		{
// 			echo "星期二";
// 			break;
// 		}
// 		default:
// 		{
// 			echo "不存在";
// 			break;
// 		}
			
// 	}
	
	/*
	 * for 循环
	 */
	//循环1
// 	for ($i= 1;$i <= 10;$i++) {
// 		echo $i;
// 		echo "<br/>";
//     }
    
    //循环2
//     $i = 1;
//     for (;;) {
//     	echo $i++;
//     	echo "<br/>";
//     	if ($i == 11) {
//     		break;
//     	}
//     }
    
    //循环3 循环输出1到10 不要输出5
//     for ($i = 1,$end = 10;$i<=$end;$i++) {
 
//     	if ($i == 5) {
//     		continue;
//     	}
//     	echo $i;
//     	echo "<br/>";
    	
//     }
	
	/*
	 * while 循环
	 */
// 	//在循环开始之前必须先初始化循环条件
// 	$i = 1;
// 	//循环开始
// 	while ($i <= 10) {
// 		if ($i == 5) {
// 			$i++;
// 			continue;
// 		}
// 		echo $i++;
// 		echo "<br/>";
// 	}

	/*
	 * 函数参数 值传递和引用传递
	 */
	//值传递
// 	function myfun1($in_name) {
// 		echo $in_name;
		
// 		$in_name = "超人";
// 	}
	
// 	$name = "黑人";
// 	myfun1($name);
	
// 	echo $name;
	
	//引用传递
// 	function myfun2(&$in_name) {
// 		echo $in_name;
		
// 		$in_name = "蓝色巨人";
// 	}
	
// 	$name = "黑人";
// 	myfun2($name);
// 	echo $name;

	/*
	 * 匿名函数
	 */
// 	$func = function() {
// 		//输出
// 		echo 'hello world';
// 	};
	
// 	//调用
// 	$func();

	/*
	 * 回调函数
	 */
// 	function myfunc($func_name,$name='京东') {
// 		//
// 		$name = $name.'你好';
// 		$func_name($name);
// 	}
	
// 	function display($name) {
// 		echo $name;
// 	}
	
// 	myfunc('display','淘宝');
	

	/*
	 * 乘法表
	 */
// 	function chengfa($n = 9) {
// 		for ($i = 1;$i<= 9;$i ++ ) {
// 			for ($j = 1;$j <= $i;$j++) {
// 				echo "$i*$j=".($i*$j)."\t";
// 			}
// 			echo '<br/>';
// 		}
// 	}
	
// 	chengfa(9);

	/*
	 * 数组
	 */
// 	//显示定义数组
// 	$arr1 = array('却夜叉','男',200,180,40);
	
// 	//隐试数组
// 	$arr2[] = 'ddd';
// 	echo $arr2[0];
	
	//手动分配下标
// 	$arr3 = array(3=>'a',2=>'b',1=>'c');
// 	var_dump($arr3);
	
	//关联数组
// 	$arr1 = array('a'=>'a','b'=>'b','c'=>'c');
// 	echo $arr1['a'];

	//数组的编列
//     $arr = array('邹荣华','王默','李伟豪','张日晖','陶丹凤','周娃女','邓桂敏');
	//获取数组的长度
// 	$leng = count($arr);
	
	//for 循环遍历数组
// 	for ($i = 0;$i < $leng;$i++) {
// 		echo $arr[$i];
// 	}

	//foreach 编列
// 	foreach ($arr as $key => $value) {
// 		echo 'key='.$key.'value='.$value;
// 		echo '<br/>';
// 	}

	//获取所有的keys 
// 	var_dump(array_keys($arr));
	
// 	//获取所有的值
// 	var_dump(array_values($arr));

	/*
	 * 数组的压栈和出栈
	 */
// 	$arr = array();
// 	//入栈
// 	array_push($arr, 'one');
// 	array_push($arr, 'two');
	
// // 	var_dump($arr);
	
// 	//出栈
// 	array_pop($arr);
// 	var_dump($arr);
	
	/*
	 * 
	 * 数组的模拟队列
	 */
// 	$arr = array();
	
// 	//入队
// 	array_push($arr, 'one');
// 	array_push($arr, 'two');
// 	array_push($arr, 'threen');
	
// 	//从数组头部弹出一个元素
// 	var_dump(array_shift($arr));
	
// 	//从数组头部插入数据
// 	var_dump(array_unshift($arr, 'forth'));
	
// 	var_dump($arr);

	/*
	 * 
	 * 数组和字符串相互转换
	 */
// // 	$arr = array('黑猫警长','黑色','流氓');
	
// // 	//将一个数组拼接成一个字符串
// // 	$str = implode('|', $arr);
// // // 	echo "{$str}";
	
// // 	//将一个字符串转换成数组
// // 	$ex_arr = explode('|', $str);
// // 	var_dump($ex_arr);

// 	//生产验证码字符串
// 	//生产指定返回的字符串
// 	$arry1 = range(1, 9); //生成一个1到9的字符串
// // 	print_r($arry1);
	
// 	$array2 = range('a', 'z');//生成一个a到z的字符串
	
// 	//合并数组
// 	$arr = array_merge($arry1,$array2);
// // 	print_r($arr);
	
// 	//随机取出指定长度的数组
// 	$arr_key = array_rand($arr,4);
// 	var_dump($arr_key);

	/*
	 * 冒泡排序
	 */


	//冒泡排序
	echo '<pre>';
	$arr = array(2,3,0,4,1,7,5);
	
	//因为排序需要每次将一个元素与数组的其他元素进行比较，所以需要两层循环来控制
	//外层循环控制冒泡次数
	//内存循环比较每次的大小，得到每次的最大值（泡）
	
	for($i = 0,$length = count($arr);$i < $length;$i++){
	
		//内存循环
		for($j = 0;$j < ($length - $i - 1);$j++){
			//拿着j变量所对应的数组元素，与后面的元素进行比较
			if($arr[$j] > $arr[$j + 1]){
				//交换位置
				$temp		= $arr[$j];
				$arr[$j]	= $arr[$j+1];
				$arr[$j+1]	= $temp;
			}
				
		}
	}
	
	var_dump($arr);
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    
	

	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
		
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	