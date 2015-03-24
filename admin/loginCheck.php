<?php
header("Content-type:text/html;charset=utf-8");//设置content类型和编码类型
require_once '../config/inc.php';//请求上一级文件的内容
$username= $_POST["username"];//从loqin.php中取值
$password=$_POST["password"];

//从数据库中选择密码判断用户名是否相同
$result = $mysqli->query("select userPassword from userInfo where username='$username'");
//把返回的结果数组化
$row=$result->fetch_row(); 

if ($row[0]==$password){
    echo "密码正确";
}else {
    echo "密码错误";
}
?>
