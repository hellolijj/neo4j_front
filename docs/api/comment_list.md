# 查看好友动态

GET:  /Comment/getList

request body:
```
{
  "dynamic_id": 23,
}
```
| field      |  is_require |type     | description | 
| :--------  | ------------|--------:| :------     | 
| dynamic_id     |   yes       | int  | 用户发布动态id | 


response
返回成功
```
{
  "status": 200,
  "message": "",
  "time": 1546087085
  "data": {
    "comment_lists": [
        {
            "userid": "safsdfa",
            "username": "李浩",
            "avatar":"",
            "text":"safasf"
            "create_time": "2018-12-22 13:24"
        },
        {
            "userid": "safsdfa",
            "username": "李浩",
            "avatar":"",
            "text":"safasf"
            "create_time": "2018-12-22 13:24"
        },
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