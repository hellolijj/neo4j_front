# 好友列表

查看好友列表

GET:  /user/frient_list

request body:
```
{
  "userid": "hello_lijj@qq.com",
}
```
| field      |  is_require |type     | description | 
| :--------  | ------------|--------:| :------     | 
| userid     |   yes       | string  | 用户登录账号 | 


response
返回成功
```
{
  "status": 200
  "message": ""
  "data": {
    "friend_lists": [
        {
            "userid": "hello_lijj@qq.com",
            "avatar": ""
            "username": "软院小哥哥",
        },
        {
            "userid": "hello_lijj@qq.com",
            "avatar": ""
            "username": "软院小哥哥",
        },
        {
            "userid": "hello_lijj@qq.com",
            "avatar": ""
            "username": "软院小哥哥",
        },
        {
            "userid": "hello_lijj@qq.com",
            "avatar": ""
            "username": "软院小哥哥",
        }
    ]
  }
}
```