# 创建好友动态

POST:  /Dynamic/create

request body:
```
{
  "userid": "hello_lijj@qq.com",
  "contents": "今天天气真好呀！"
}
```
| field      |  is_require |type     | description | 
| :--------  | ------------|--------:| :------     | 
| userid     |   yes       | string  | 用户登录账号 | 
| info   |   yes       | string  | 动态信息  |  


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
如果有错误，错误message将会提示用户
```
{
  "status"： 405
  "message": "erron info"
}

```