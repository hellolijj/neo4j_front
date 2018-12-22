# 注册

```
swagger: '2.0'
info:
  description: 这是neo4-front项目的前后段对接的api接口文档.
  version: 1.0.0
  title: neo4j-front mock
  termsOfService: 'http://swagger.io/terms/'
  contact:
    email: 21851172@zju.edu.cn
  license:
    name: Apache 2.0
    url: 'http://www.apache.org/licenses/LICENSE-2.0.html'
host: 'localhost:9200'
basePath: /v2
schemes:
  - http
tags:
  - name: user
    description: 登录系统使用的每一个用户
paths:
 /user/register:
    post:
      tags:
        - user
      summary: 用户登录系统
      description: ''
      operationId: loginUser
      produces:
        - application/json
      parameters:
        - name: user_id
          in: query
          description: 用户登录账号
          required: true
          type: string
        - name: password
          in: query
          description: 用户密码
          required: true
          type: string
        - name: password_again
          in: query
          description: 重复用户密码
          required: true
          type: string
        - name: username
          in: query
          description: 用户名，用于交友时显示的用户名称
          required: true
          type: string
        - name: sex
          in: query
          description: 男 or 女
          required: false
          type: string
        - name: desc
          in: query
          description: 个人说明
          required: false
          type: string
      responses:
        '200':
          description: successful operation
        '405':
          description: Invalid username/password supplied
  /user/logout:
    get:
      tags:
        - user
      summary: 登录退出
      description: ''
      operationId: logoutUser
      produces:
        - application/json
      parameters: []
      responses:
        200:
          description: success
        405:
          description: error return
  /user/login:
    post:
      tags:
        - user
      summary: 用户注册，创建用户进入数据库
      description: 发看就看；
      operationId: addPet
      consumes:
        - application/json
      produces:
        - application/json
      parameters:
        - name: userid
          in: query
          description: 用户登录账号
          required: true
          type: string
        - name: password
          in: query
          description: 用户密码
          required: true
          type: string
          
      responses:
        200:
          description: success
        405:
          description: error return
          
definitions:
  User:
    type: object
    properties:
      user_id:
        type: string
        description: 每个用户唯一的user_id 不可以重复
      password:
        type: string
      username:
        type: string
        description: 用户名，用于交友时显示的用户名称
      sex:
        type: string
        description: 男 or 女
      desc:
        type: string
        description: 个人说明
    xml:
      name: User
```