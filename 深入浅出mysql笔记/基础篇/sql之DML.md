## DML

开发最常用的。插入，更新，删除，查询

## 常用的

由于是开发人员，这些语句经常用。就不详细记录了

```mysql
// 插入
INSERT INTO student (name,age) VALUES ('XIAOMING',18),('XIAOHONG',22)
// 更新
UPDATE student SET age=100 WHERE name='XIAOMING'

// 同时更新两张表
UPDATE student a,teacher b SET a.school_number=b.school_number,b.age=88 WHERE a.name = b.name 

// 删除记录
DELETE FROM student where id=1

// 一次删两个表的记录
DELETE a,b FROM student a,teacher b WHERE a.name=b.name and a.name = '小明'

// 查询
SELECT * FROM student where age = 8

// 查询（某一列）不重复的数据
SELECT DISTINCK name from student

// 排序   对于 age 相同的，再按 id 大小排序 
SELECT * FROM table ORDER BY age,id desc


```



