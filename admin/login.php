<?php 
    header("Content-type:text/html;charset=utf-8");//设置content类型和编码类型
    require_once '../config/inc.php';//请求上一级文件的内容
    
    //判断是否提交到login.php
    if(isset($_POST["act"])){
        if ($_POST["act"] == "login"){
            $act=$_POST["act"];
            $username= $_POST["username"];//从login.php中取值
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
        }
    }
?>



<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>登陆-嘉欣</title>
	<link rel="stylesheet" href="../static/bootstrap/dist/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
            <input type="hidden" value="login"/>
            <div class="form-group">
                <label for="username">用户名</label> 
                <input type="text" class="form-control" id="username" placeholder="用户名"/>
            </div>
            <div class="form-group">
                <label for="password">密码</label> 
                <input type="password" class="form-control" id="password" placeholder="密码"/>
            </div>
                 <button type="submit" class="btn btn-default" />提交</button>
        </form>    
    </div>






	<form action="login.php" method="post" >
	   <input type="hidden" name="act" value="login" />
	   <div>
	       <lable>用户名</lable>
	       <input type="text" id="username" name="username" />
	   </div>
	   <div>
	       <lable>密码</lable>
	       <input type="password" id="password" name="password"/>
	   </div>
	   <input type="submit" value="提交" />
	</form>
</body>
</html>
