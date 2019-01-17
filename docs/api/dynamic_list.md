# 查看好友动态

GET:  /Dynamic/getList

request body:
```
{
  "userid": "hello_lijj@qq.com",
  "dynamicid": 123
}
```
| field      |  is_require |type     | description | 
| :--------  | ------------|--------:| :------     | 
| userid     |   yes       | string  | 用户登录账号 | 
| dynamicid     |   可选       | id  | 动态id | 



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
            "dynamicid":234,
            "userid": "hello_lijj@qq.com",
            "avatar": ""
            "username": "软院小哥哥",
            "contents":"今天天气很好呀",
            "contents_img":[
              "http://www.pptok.com/wp-content/uploads/2012/08/xunguang-4.jpg",
              "http://5b0988e595225.cdn.sohucs.com/images/20181219/aec27193b3834a1694f535ba307995ad.jpeg"
            ],
            "create_time": "2018-12-22 13:24"
        },
        {
            "dynamicid":231,
            "userid": "hello_lijj@qq.com",
            "avatar": ""
            "username": "软院小哥哥",
            "contents":"今天天气很好呀",
            "contents_img":[
              "http://www.pptok.com/wp-content/uploads/2012/08/xunguang-4.jpg",
              "http://5b0988e595225.cdn.sohucs.com/images/20181219/aec27193b3834a1694f535ba307995ad.jpeg"
            ],
            "create_time": "2018-12-22 13:24",
            "comments":2
            "stars":8
        },
        {
            "dynamicid":233,
            "userid": "hello_lijj@qq.com",
            "avatar": ""
            "username": "软院小哥哥",
            "info":"今天天气很好呀",
            "contents_img":[
            ],
            "create_time": "2018-12-22 13:24",
            "comments":23
            "stars":8
        },
        {
            "userid": "hello_lijj@qq.com",
            "avatar": ""
            "username": "软院小哥哥",
            "info":"今天天气很好呀",
            "contents_img":[],
            "create_time": "2018-12-22 13:24",
            "comments":23
            "stars":8
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