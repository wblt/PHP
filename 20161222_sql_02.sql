-- 创建表
create table test_case(
`character` varchar(1)
)charset utf8 collate utf8_bin;

create table test_case1(
`character` varchar(1)
)charset utf8 collate utf8_general_ci;

-- 插入数据
insert into test_case values('a'),('A'),('b'),('B');
insert into test_case1 values('a'),('A'),('b'),('B');
insert into test_case values('b');

-- 升序查看数据
select * from test_case order by `character` asc;
select * from test_case order by `character` desc;

-- 查看校对集
show collation;

-- 修改默认的校对集
alter database mydatabase charset utf8 collate utf8_bin;
alter database mydatabase charset utf8 collate utf8_general_ci;

-- 修改表的校对集
alter table test_case collate utf8_bin;
alter table test_case collate utf8_general_ci;

delete from test_case;


-- int类型测试
create table test_int(
`tinyint` tinyint,
`smallint` smallint,
`mediumint` mediumint,
`int` int,
`bigint` bigint
)charset utf8;

insert into test_int values(1,2,3,4,5); -- 没有问题
insert into test_int values(256,256,256,256,256); -- 不能插入，tinyint超出范围
insert into test_int values(-100,-200,-300,-400,-500); -- 正常，默认是有符号

-- 增加无符号字段类型
alter table test_int add age tinyint unsigned; -- 无符号的迷你整型

-- 更新表字段数据
update test_int set age = -1;-- 错误，因为age是无符号，只能从0开始
update test_int set age = 250;-- 正确

-- 修改字段tinyint为显示宽度为2,0填充
alter table test_int modify `tinyint` tinyint(2) zerofill;
-- 指定tinyint字段显示宽度为2，如果不足两个宽度使用0填充

-- 修改字段
update test_int set `tinyint` = 100 where `tinyint` = -100;

-- 浮点数
create table test_float(
`float` float,
`double` double(20,2) -- 整个有效十进制长度为20，其中整数部分为18，小数部分占2
)charset utf8;

insert into test_float values(123456789.12345678,12345678901234567890.213456789);
-- 第二个浮点数已经超出了指定的长度，整数部分有20个长度

insert into test_float values(23456789.23456789,12345678903456.23456);
-- 小数部分虽然超出了指定的长度，但是系统会进行四舍五入，自动保留两位

create table test_decimal(
`decimal` decimal(10,2), -- 表示整数最长为10，小数部分为2
`float` float(10,2)
)charset utf8;

insert into test_decimal values(12345678.90,12345678.90);-- 正常数据
insert into test_decimal values(99999999.99,99999999.99);-- 正常数据
insert into test_decimal values(99999999.999,99999999.999);

create table test_decimal2(
`decimal` decimal)charset utf8;
insert into test_decimal2 values(23456789234567.3456783456789);
insert into test_decimal2 values(12345678.99);
insert into test_decimal2 values(123456789.99);
insert into test_decimal2 values(12345678901);


create table test_enum(
weekday enum('星期一','星期二','星期三','星期四','星期五','星期六','星期天')
--               1       2        3        4        5         6       7
)charset utf8;

insert into test_enum values('星期一'); -- 正常数据，因为数据已经定义过
insert into test_enum values('星期天');
insert into test_enum values('星期日'); -- 错误，因为该数据不存在

-- 查看枚举数值
select weekday + 0 from test_enum;

create table test_set(
hobby set('游泳','爬山','打球','骑车','旅游','纸牌','电玩','手游')
--           8      7      6     5      4      3       2     1
-- 每一个元素都直接占据一位作为自己的存储空间，如果当前被选中，那么值为1，否则为0
--          1      0      0       1      1     0       0      0===10011000
--          2 ^7                  2 ^ 4  2 ^ 3  = 152
--	    00011001
--             2 ^ 4 + 2 ^ 3 + 2 ^ 0 = 16 + 8 + 1 = 25
-- 
)charset utf8;

insert into test_set values('游泳,骑车,旅游'); -- 可以，多选
insert into test_set values('爬山,打球,骑车,旅游,手游'); -- 可以，多选
insert into test_set values('游泳,爬山,打球,骑车,旅游,纸牌,电玩,手游'); -- 可以，多选
insert into test_set values('游泳,电玩,手游,打球,骑车,爬山,旅游,纸牌'); -- 顺序全乱了，但是也ok


insert into test_enum values(3); -- 可以插入，本身存储就是数值
insert into test_set values(3); -- 可以插入，本身存储也是数值，只是需要将数值进行分解


create table test_date(
`datetime` datetime,
`timestamp` timestamp,
`date` date,
`time` time,
`year` year
)charset utf8;

insert into test_date values('2014-8-20 16:34:49','12345678','2014-8-20','16:35:35','2014');
-- 时间戳不能是PHP中的时间戳，而应该是时间戳范围内对应的日期时间格式
insert into test_date values('2014-8-20 16:34:49','2014-8-20 16:36:59','2014-8-20','16:35:35','2014');

insert into test_date values('2014-8-20 16:34:49','2014-8-20 16:36:59','2014-8-20','816:35:35','2014');
insert into test_date values('2014-8-20 16:34:49','2014-8-20 16:36:59','2014-8-20','-5 16:35:35','2014');
-- time里面的-5表示5天之前


create table test_varchar_max(
`varchar` varchar(32766)
)charset gbk;
alter table test_varchar_max modify `varchar` varchar(32767);

create table test_varchar_maxutf8(
`varchar` varchar(21844)
)charset utf8;


create table test_varchar_maxgbk(
`tinyint` mediumint,
`varchar` varchar(32765)
)charset gbk;
-- 不可，因为刚好占满，但是没有留下空间来保存null
-- 32765 * 2  + 3 + 2 = 65535
create table test_varchar_maxgbk(
`tinyint` mediumint not null,
`varchar` varchar(32765) not null
)charset gbk;
-- 可以，没有可以为null的字段，那么不需要空间来保存null值

create table test_varchar_maxgbk1(
`tinyint` smallint,
`varchar` varchar(32765)
)charset gbk;
-- 留了一个字节空间用来保存null值


create table test_text(
content text, -- 占10个字节
`varchar` varchar(32760)
)charset gbk;