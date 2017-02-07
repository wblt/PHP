-- 每天的SQL语句都会写在对应的SQL文件中
-- 两个中划线+空格，是sql语句的一种注释
-- 库操作
-- 创建数据库
create database mydatabase charset utf8;

-- 关键字
create database database charset utf8; -- 错误
create database `database` charset utf8; -- 正确
create database databass charset utf8;
create database `databases` charset utf8;

-- 中文
create database `中国` charset utf8;

-- 查看数据库
show databases;  -- 查看所有的数据库（有权限看到）
show databases like 'data%'; -- 匹配所有以Data开始的数据库
show databases like 'databas_'; -- 匹配所有以databas开始，然后后面跟一个字符的数据库

show databases like 'information_%'; -- 匹配所有以information开始，后面接任何内容
-- 匹配下划线：需要转义符号
show databases like 'information\_%'; -- 匹配所有以information_开始，后面匹配所有

-- 查看数据库创建语句
show create database `database`;



-- 修改数据库的库选项
alter database mydatabase charset gbk;	-- 将数据库mydatabase的字符集改成gbk

-- 删除数据库
drop database `database`;
drop database `databases`;
drop database `databass`;
drop database `中国`;

-- 表操作
-- 创建数据表
create table mydatabase.mytable(
id int, -- id为整型
name varchar(10) -- name为字符串类型
) charset utf8 engine innodb;	-- 存储引擎为InnoDB，默认为这个，不写也一样

-- 进入数据库
use mydatabase;
create table mytable2(
id int,
name varchar(10)
)charset utf8;

-- 创建一个Myisam存储引擎的表
create table mytable3(
id int,
name varchar(10)
)charset utf8 engine myisam;

-- 查看表
show tables; -- 查看所有当前数据库下的表（必须要进入到数据库）

show create table mytable3; -- 查看表创建语句

desc mytable3; -- 查看表结构
describe mytable2; -- 查看表结构
show columns from mytable; -- 查看表结构

-- 修改表结构
rename table mytable to mytable1; -- 将mytable改名为mytable1

alter table mytable1 add column age int; -- 在mytable1表中最后增加一个age字段，类型为整型

alter table mytable1 add first int first; -- 在mytable1的最前面增加一个整型first字段

alter table mytable1 modify first varchar(10) after age;
-- 修改表中first字段的字段类型为varchar，并且将位置放到age字段之后

alter table mytable1 change first second varchar(10);
-- 修改first字段名字为second

alter table mytable1 drop second; -- 删除second字段

-- 删除表
drop table mytable3;-- 删除mytable3表

-- 创建表
create table if not exists mytable1(
id int
)charset utf8;

-- 删除表
drop table mytable3; -- 表不存在
drop table if exists mytable3; -- 表不存在

-- 数据操作
-- 插入数据
insert into mytable1 values(1,'Hanmeimei',18); -- 插入一个与表字段完全一致的记录
-- 注意：values里面的数据值，必须与字段顺序完全对应上
-- insert into mytable1 values('Hanmeimei',2,18); -- 错误，因为顺序不对
insert into mytable1 (name,id,age) values('Lilei',2,20); 
-- 值列表里的数据顺序必须和指定的字段顺序一致，而字段顺序可以与定义表时的字段顺序不一致

insert into mytable1 values('3','Jim','22'); -- 正确的
insert into mytable1 values(4,'Green',23),(5,'Polly',35); -- 一次性插入两条记录

-- 查看数据
select * from mytable1; -- *代替所有字段，表示查看所有数据
select name,age from  mytable1; -- 只查看所有数据中的name和age字段
select * from mytable1 where age > 20;-- 查看年龄大于20的所有数据

-- 更新数据
update mytable1 set age = 19 where id = 1;-- 修改id为1数据的age字段的值为19
update mytable1 set age=30,name='Tom' where id = 2;
-- 修改id为2数据的年龄和名字字段

-- 删除数据
delete from mytable1 where id = 5; -- 删除id为5的值的记录

-- 插入中文数据
insert into mytable1 values(5,'李雷',23);

-- 如果在此连接操作数据库，那么需要设置字符集为什么？
set names utf8;-- 因为当前文件本身是utf-8编码，只能识别utf-8的数据

-- 查看mysql支持的字符集
show character set;

-- 查看mysql服务器对客户端的默认识别字符集
show variables like 'character_set%';