# 删除好友

POST:  /user/fri_delete

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