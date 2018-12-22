# 注册

注册模块

请求接口：

POST:  /user/register

request body:
```
{
  "userid": "hello_lijj@qq.com",
  "password": "123456",
  "password_again": "123456",
  "username": "软院小哥哥",
  "sex":"男",
  "desc": "我是软院的小哥哥"
}
```
| field      |  is_require |type     | description | 
| :--------  | ------------|--------:| :------     | 
| userid     |   yes       | string  | 用户登录账号 | 
| password   |   yes       | string  | 用户密码  | 
| password_again|  yes     | string  | 重复用户密码 | 
| username   |   yes       | string  | 用户名，用于交友时显示的用户名称 | 
| sex        |             | string  | 男 or 女 |  
| desc       |             | string  | 个人说明 |  


response
返回成功
```
{
  "status": 200
  "message": ""
}
```
如果有错误，错误message将会提示用户
```
{
  "status"： 405
  "message": "erron info"
}

```