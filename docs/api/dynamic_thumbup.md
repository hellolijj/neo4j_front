# 动态点赞👍

POST:  /Dynamic/thumb_up

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
  "data":"",
  "time": 1546087085
}
```
如果有错误，错误message将会提示用户（注意，一个用户只能点赞一次，不能取消点赞）
```
{
  "status"： 405
  "message": "erron info"
}

```