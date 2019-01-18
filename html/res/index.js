// 定义测试路径
// base_url = "http://127.0.0.1:52000/index.php/Home"
base_url = "http://104.160.43.250:8888"


// 检测是否登录, 时间判断
var lastRequest = localStorage.getItem('lastRequest')
if (lastRequest + 3600 < Date.now() / 1000) {
    alert('缓存失效，请重新登录')
    window.location.href = "login.html"
}

// 退出函数
logout = function(){
    localStorage.clear()
    layer.alert("退出成功，刷新页面重新登录", {
        title: '提示'
    })
}