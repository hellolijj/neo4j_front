# 查看好友动态

GET:  /Dynamic/getList

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
  "status": 200,
  "message": "",
  "time": 1546087085
  "data": {
    "dynamic_lists": [
        {
            "userid": "hello_lijj@qq.com",
            "avatar": ""
            "username": "软院小哥哥",
            "contents":"今天天气很好呀",
            "create_time": "2018-12-22 13:24"
        },
        {
            "userid": "hello_lijj@qq.com",
            "avatar": ""
            "username": "软院小哥哥",
            "contents":"今天天气很好呀",
            "create_time": "2018-12-22 13:24"
        },
        {
            "userid": "hello_lijj@qq.com",
            "avatar": ""
            "username": "软院小哥哥",
            "info":"今天天气很好呀",
            "create_time": "2018-12-22 13:24"
        },
        {
            "userid": "hello_lijj@qq.com",
            "avatar": ""
            "username": "软院小哥哥",
            "info":"今天天气很好呀",
            "create_time": "2018-12-22 13:24"
        }
    ]
  }
}
```

返回数据为空

返回成功
```
{
  "status": 200,
  "message": "",
  "time": 1546087085
  "data": {
    "dynamic_lists": []
  }
}
```