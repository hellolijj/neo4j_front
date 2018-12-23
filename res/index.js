// 定义测试路径
const base_usr = "http://127.0.0.1/neo4j_mock/index.php/Home"

// 检测是否登录
var user = $.cookie('userinfo');
if(!user) {
    // 跳转到登录
}
