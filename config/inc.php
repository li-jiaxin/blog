<?php
header("Content-type:text/html;charset=utf-8");
require_once 'config.php';//请求同一级文件中的内容
//定义一个函数，连接数据库
$mysqli=new mysqli(HOST,username,password,dbname);
//判断数据库是否连接
if(mysqli_connect_errno()){
    printf("Connect failed:%S\n",mysqli_connect_error());
    exit();
}

// $result = $mysqli->query("select * from article");
// print_r($result->fetch_row());

?>