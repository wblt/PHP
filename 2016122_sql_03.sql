-- 创建表
create table test_collate1(
`char` char(1)
)charset utf8 collate utf8_general_ci;
-- 不区分大小写
insert into test_collate1 values('a'),('B'),('c'),('D');
-- 升序：a ，B ， c ，D

create table test_collate2(
`char` char(1)
)charset utf8 collate utf8_bin;
-- 二进制比较（区分大小写）
insert into test_collate2 values('a'),('B'),('c'),('D');
-- 升序：B ，D ，a ， c

-- 修改表结构
alter table test_collate1 collate utf8_bin;
-- 将表的校对集选项从默认的utf8_general_ci改成utf8_bin

-- 创建表
create table student(
number char(10) not null, -- number字段不能为空
name varchar(10) not null,
phone_num char(11) default null,-- 允许为空，且默认就是空
gender tinyint default 0-- 用数字表示性别，0代表男，1代表女
)charset utf8;

-- 插入值
insert into student values('itcast0001','李旭东',null,1); -- 因为电话字段必须要输入内容，使用null
insert into student (number,name) values('itcast0002','余旭东');
-- 可以为有默认值的字段不进行数据插入
-- 假设有20个字段：其中有两个字段想使用默认值，而不知道默认值是什么
insert into student values('itcast0003','周娃女',default,default);
-- default就代表使用表中定义的默认值


-- 创建一个用户表
create table `user`(
username varchar(20) not null primary key,
password char(50) not null,
email varchar(50),
name varchar(10),
phone_num char(11)
)charset utf8;

-- md5函数 ： md5('密码')
insert into `user` values('mark1',md5('mark1'),default,'陈骏宇',default);
insert into `user` values('mark2',md5('mark2'),'123456@qq.com','唐勇战',default);
insert into `user` values('mark1',md5('wojiazhuzaina'),'3456789@163.com','李少桂',default);
-- 不能插入，因为username字段是主键不允许重复

-- 删除表
drop table if exists `user`;
create table `user`(
username varchar(20) not null,
password char(50) not null,
email varchar(50),
name varchar(10),
phone_num char(11),
primary key(username) -- 单独为primary key添加字段
)charset utf8;

drop table if exists `user`;
create table `user`(
username varchar(20) not null,
password char(50) not null,
email varchar(50),
name varchar(10),
phone_num char(11),
primary key(username,name) -- 复合主键，使用username和name共同组成唯一字段
)charset utf8;
insert into `user` values('mark1',md5('1234567'),'5689@163.com','李少桂',default);

-- 给学生表增加主键
alter table student add primary key(number); -- 将学生表的number字段当做主键
-- 前提：当前学生表的数据中，number字段唯一（没有重复值）

-- 删除主键
alter table student drop primary key; -- 删除学生表的主键

-- 给表中一个不存在的字段增加主键
alter table student add s_id int not null primary key first;
-- 给学生表先增加一个不为空的s_id字段（整型），放到第一个位置，当做主键
-- 这种情况：可以先把所有的数据给清除掉
delete from student;
alter table student add s_id int not null primary key first;
-- 给学生表先增加一个不为空的s_id字段（整型），放到第一个位置，当做主键
alter table student add s_id int not null primary key auto_increment first;

-- 修改表结构
alter table student auto_increment = 1; -- 不可以，因为1已经在使用的过程中
alter table student auto_increment = 10; -- 可以，因为10没有被使用过

insert into student values(null,'itcast0004','刘泽文',null,default); -- s_id = 10

alter table student auto_increment = 5; -- 不生效

-- 查看自增长控制变量
show variables like 'auto_increment%';

create table test_unique(
username varchar(10) unique key,
email varchar(50) not null unique key
)charset utf8;

insert into test_unique values(null,1);	-- 第二个字段变成了主键，所以不能重复
insert into test_unique values(null,2);
insert into test_unique values(null,3);
insert into test_unique values('a',4);
insert into test_unique values('a',5); -- 错误，唯一键重复

create table test_unique2(
username varchar(10) not null unique key,
email varchar(50) not null unique key
)charset utf8;


-- 删除唯一键
alter table test_unique drop unique key(username);-- 错误
alter table test_unique drop unique key;-- 错误
alter table test_unique drop index `username`; -- 正确

-- 创建一个教师表
create table teacher(
t_id int not null primary key auto_increment, -- 教师id
name varchar(10) not null comment '教师姓名',#这是老师姓名
salary decimal(6,2) not null comment '教师工资',/*这里是老师的工资
也不知道是真是假
*/
gender enum('male','female') default 'male' comment '教师性别'
)charset utf8;


-- 创建班级表
create table class(
c_id int not null primary key auto_increment,
name varchar(10) not null comment '班级名称',
root varchar(10) comment '教室'
)charset utf8;

insert into class values(null,'PHP140706','D306'),(null,'PHP140508','B2302M'),(null,'PHP140310','B2302');

-- 修改学生表，增加班级ID字段
alter table student add column class_id int not null default 1;
-- 增加一个class_id字段，默认值为1

-- 创建外键
drop table if exists teacher;
create table teacher(
t_id int not null primary key auto_increment,
name varchar(10) not null,
salary decimal(7,2) not null,
phone char(11),
class_id int comment '外键字段，指向class表的c_id',
-- 增加外键，当前表的class_id字段指向class表的c_id字段
foreign key(class_id) references class(c_id)
)charset utf8;

desc teacher;
show create table teacher;
insert into teacher values(null,'李东超','20000',default,1);
insert into teacher values(null,'姚长江','10000',default,2);
insert into teacher values(null,'马浩洋','6000',default,3);

-- 在教师表里插入在class表中不存在的班级id
insert into teacher values(null,'韩振国','10000',default,4);

-- 删除class表中id为1的班级信息（c_id为1的班，有一个教师表中的class_id字段绑定）
delete from class where c_id = 1;

-- 增加一个班级
insert into class values(null,'PHP140226','A203');

-- 为学生增加外键，指向班级
alter table student add constraint `student_class` foreign key(class_id) references class(c_id);

-- 删除学生表中的外键
alter table student drop foreign key student_class; 

-- 修改表结构
alter table student modify class_id int;
-- 增加外键，指定约束模式
alter table student 
add constraint `student_class`  -- 指定外键名称
foreign key(class_id)  -- 指定外键字段
references class(c_id) -- 指定外键指向的表
on delete set null -- 当父表删除记录时，子表对应的记录置空
on update cascade; -- 当父表记录更新时，子表跟着更新

-- 删除teacher的外键
alter table teacher drop foreign key teacher_ibfk_1;


-- 新增班级数据（主键指定且已经被占用了）
insert into class values(4,'PHP140815','B201');
insert into class values(4,'PHP140815','B201') on duplicate key update name = 'PHP140815',root = 'B201';
-- 如果主键4不存在，就插入记录，如果存在就更新两个字段

replace into class values(4,'PHP140815','B201');

create table test_insert(
id int primary key auto_increment,
name varchar(10)
)charset utf8;

insert into test_insert values(null,'mark1'),(null,'mark2'),(null,'mark3'); 

-- 蠕虫复制
insert into test_insert (name) select name from test_insert;

update test_insert set name = 'mark4' where name = 'mark3'; -- 将所有为mark3的改成mark4
update test_insert set name = 'mark4' where name = 'mark3' limit 2; -- 将查询出来mark3的前两个改成mark4

delete from test_insert where name = 'mark1' limit 3;

delete from test_insert where id > 20;

truncate test_insert;
insert into test_insert values(null,'mark6');
insert into test_insert values(null,'mark5');
insert into test_insert (name) select name from test_insert; 

-- 查询数据
select * from test_insert;
select all * from test_insert;

select distinct * from test_insert;

select all name from test_insert;

select distinct name from test_insert;