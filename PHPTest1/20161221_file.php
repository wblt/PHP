<?php

// 	echo 'hello file';
	
	/*
	 * �ļ�Ŀ¼����
	 */
	//����һ��·��
// 	$dir = './';
	
	//��·�� �õ�·����������е���Դ
// 	$o = opendir($dir);
// 	var_dump($o);
	
	//��ȡ�ļ� //����Դ����һ������ȡ�ļ�
// 	var_dump(readdir($o));
// 	var_dump(readdir($o));
// 	var_dump(readdir($o));
// 	var_dump(readdir($o));
// 	var_dump(readdir($o));
// 	var_dump(readdir($o));
// 	var_dump(readdir($o));
// 	var_dump(readdir($o));
	
	//����ָ��
// 	rewinddir($o);
	
	//�ͷ���Դ
// 	closedir($o);
	
	//����ļ�Ŀ¼
// 	$files = scandir($dir);
// 	var_dump($files);

	/*
	 * 遍历目录里面的所有的文件夹
	 */
	//����dir 
// 	$dir = './test';
// 	$o = opendir($dir);
// 	$count = 0;
// 	$fileName = readdir($o);
// 	while ($fileName) {
// 		echo $fileName;
// 		$count ++;
// 		$fileName = readdir($o);
// 	}
// 	echo "当前文件{$dir}工有{$count}个文件";
// 	closedir($o);

	/*
	 * 文件操作相关函数
	 */
	//定义几个变量
// 	$dir =  './';
// 	$dir1 = '../';
// 	$dir2 = __DIR__;
// 	$dir3 = __FILE__;
// 	$dir4 = './test';
// 	$dir5 = './index.php';

	//1.判断是否路径是否存在
// 	var_dump(file_exists($dir));

	//2.判断是目录还是文件
// 	var_dump(is_dir($dir));

	//创建文件夹
// 	var_dump(mkdir('parent'));
	
	//删除文件夹
// 	var_dump(rmdir('parent'));

	//获取当前的操作的路径
// 	var_dump(getcwd());

	//改变工作目录
// 	var_dump(chdir('ddd'));

	/*
	 * 
	 * 遍历所有的文件及子文件夹
	 */
    //2.	给定路径
// 	$dir = './';
	
// 	//3.	获取资源
// 	if(is_dir($dir)){
// 		//是路径，所以才打开
// 		$o = opendir($dir);
// 		//var_dump($o);
	
// 		//循环遍历文件
// 		while($filename = readdir()){
// 			//将.和..文件夹去掉
// 			if($filename == '.' || $filename == '..'){
// 				echo "<font color='red'>$filename</font><br/>";
// 				continue;
// 			}
				
// 			//判断当前文件是否是目录还是文件
// 			$dir = $dir . '/' . $filename;		//20140817/a
// 			//20140817/a/grandson
// 			if(is_dir($dir)){
// 			//判断路径必须先拼凑完整的路径
// 				//改变工作路径
// 				echo "<font color='red'>$filename</font><br/>";
// 				//var_dump($next);exit;
// 				chdir($dir);
// 				opendir($dir);
// 				//var_dump(readdir());
// 				//echo getcwd();exit;
// 			}else{
// 			//输出文件
// 			echo "<font color='blue'>$filename</font><br/>";
// 			}
// 		}
// 	}
	
	/*
	 * 
	 * php 5 文件操作
	 */
	//1.从文件中读取类容
// 	$dir = './index.php';
// 	$str = file_get_contents($dir);
// 	echo $str;

	//2.讲字符串写入文件
// 	file_put_contents('./test1.php', 'fdfdf');

	//文件操作相关函数
	//获取文件最后修改的时间
// 	var_dump(filemtime('./index.php'));
	//获取文件的大小
// 	var_dump(filesize('./index.php'));

	//获取文件的权限
// 	printf("%o",fileperms('./index.php'));
	
	//删除文件
// 	unlink('dfdf');
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	