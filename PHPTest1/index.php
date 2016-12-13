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
	
	echo "<p>改进方法</p>";
	$x = 5;
	$y = 10;
	function myTest() {
		global $x,$y;
		$y = $x + $y;
	}
	echo "<p>运行函数</p>";
	myTest();
	echo $y;
	echo "<p>这样就能正确的使用全局变量了</p>";
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
		
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	