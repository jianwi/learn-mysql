## mysql的启动和关闭 

有两种方式。命令行和服务的方式

### 命令行方式

#### 启动服务
```
./mysqld_safe &
```

#### 关闭服务
```
mysqladmin -uroot shutdown
```
### 服务的方式
#### 启动服务
```
service mysql start

service mysql restart
```
#### 关闭服务
```
service mysql stop
```