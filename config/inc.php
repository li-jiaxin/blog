<?php
header("Content-type:text/html;charset=utf-8");
require_once 'config.php';//����ͬһ���ļ��е�����
//����һ���������������ݿ�
$mysqli=new mysqli(HOST,username,password,dbname);
//�ж����ݿ��Ƿ�����
if(mysqli_connect_errno()){
    printf("Connect failed:%S\n",mysqli_connect_error());
    exit();
}

// $result = $mysqli->query("select * from article");
// print_r($result->fetch_row());

?>