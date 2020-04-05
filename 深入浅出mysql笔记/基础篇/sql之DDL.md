### DDL

数据库定义语句。对数据库，表的创建，删除

### 数据库操作

```mysql
// 创建数据库
CREATE DATABASE test1
// 使用 test1 数据库
USE test1
// 删除数据库
DROP DATABASE test1
```

### 表操作

mysql  的表名会以目录的形式储存于磁盘上，命名遵循目录的命名规范

```
// 创建表
CREATE TABLE student(
id int(11) ,
name varchar(15),
school_number varchar(10)
)

// 查看表定义
DESC student

// 查看创建表的语句
SHOW CREATE TABLE student
```

