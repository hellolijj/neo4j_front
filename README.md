# 说明

这是《数据库》课程 张亶老师的neo4j作业的前端代码。作业要求使用neo4j数据库实现一个好友动态管理的web系统。
系统实现了动态管理、好友管理、用户信息管理等功能

## 系统访问

- 项目后端：https://github.com/ccdongyu/neo4j-backend/
- 系统测试账号 id： 
    - hello_lijj 123
    - admin 123
    - lijj 123
    
    - 123 123
    - 456 123




## 项目部署

```
$ git clone https://github.com/hellolijj/neo4j_front.git
$ cd neo4j_front
$ docker-compose up -d
```
项目地址：127.0.0.1:52000
后端mock地址：127.0.0.1:52001

## 功能模块

### 接口文档

#### 个人信息

- [登录](./docs/api/login.md)
- [退出（此功能模块不需要开发）](./docs/api/logout.md)
- [注册](./docs/api/register.md)
- [修改信息（暂时可以不做）](./docs/api/info_change.md)
 
#### 好友管理

- [添加好友](./docs/api/friend_add.md)
- [删除好友](./docs/api/friend_delete.md)
- [好友列表](./docs/api/friend_list.md)

#### 动态管理

- [发布动态](./docs/api/dynamic_create.md)
- [动态列表](./docs/api/dynamic_list.md)
- 查看自己动态（暂时可以不做）
- 动态删除(暂时可以不做)


### 小组成员

#### 分工

- 前端：
邵迪龙：好友关系部分
陈礼昌：登录与注册部分
[李俊君](https://github.com/hellolijj) ：动态显示部分

- 后端：
张雁宇：好友模块的后段逻辑
唐冬雨：
孙超：好友推荐接口
徐凌：信息修改接口

- 数据库：鲁佳南

- 技术文档部分的书写？
