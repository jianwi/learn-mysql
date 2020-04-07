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
SELECT * FROM student ORDER BY age,id desc

// 取有限的数据 （从第10个开始，取10条）
SELECT * FROM student ORDER BY age LIMIT 10,10
```



## 有点意思

### 1. 聚合

![1586181469152](assets/1586181469152.png)

像求最大值，平均值这类问题，就需要聚合来看。聚合谁呢？比如说求某个学生的平均成绩，那么就聚合这个学生。

student 表里存的数据是这样的

| 学生（student） | 科目(subject) | 成绩(score) |
| ---- | ---- | ---- |
| 小明 | 语文 |100|
| 小明 | 数学 |20|
| 小红 | 语文 |80|

```mysql
// 求每位同学的平均成绩
SELECT  student,avg(score) FROM student GROUP BY student
```

查询结果

| 学生（student） | avg(score) |
| --------------- | ---------- |
| 小明            | 60         |
| 小红 | 80   |

```mysql
// 求每科的平均成绩

SELECT subject,avg(score) FROM student GROUP BY subject
```

查询结果

