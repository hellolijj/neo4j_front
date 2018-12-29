# 添加好友


删除好友不需要对方同意，一旦一方添加好友，两人即成为好友关系


POST:  /user/friend_add

request body:
```
{
  "userid": "hello_lijj@qq.com",
  "friend_id": "say_hello@163.com"
}
```
| field      |  is_require |type     | description | 
| :--------  | ------------|--------:| :------     | 
| userid     |   yes       | string  | 用户id | 
| friend_id     |   yes       | string  | 好友id | 




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