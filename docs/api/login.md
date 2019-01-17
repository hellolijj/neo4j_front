# 登录模块

GET:  /User/login

request body:
```
{
  "userid": "hello_lijj@qq.com",
  "password": "123456",
}
```
| field      |  is_require |type     | description | 
| :--------  | ------------|--------:| :------     | 
| userid     |   yes       | string  | 用户登录账号 | 
| password   |   yes       | string  | 用户密码  |  


response
返回成功
```
{
  "status": 200
  "message": ""
  "time": 
  "data": {
    "userid": "hello_lijj@qq.com",
    "avatar": ""
    "username": "软院小哥哥",
    "sex":"男",
    "desc": "我是软院的小哥哥"
  }
}
```


如果有错误，错误message将会提示用户
```
{
  "status"： 405
  "message": "erron info"
}

```