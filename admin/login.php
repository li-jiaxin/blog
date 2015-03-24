<?php 
    header("Content-type:text/html;charset=utf-8");//设置content类型和编码类型
    require_once '../config/inc.php';//请求上一级文件的内容
    
    //判断是否提交到login.php
    if(isset($_POST["act"])){
        $username= filterUser($_POST["username"]);//从login.php中取值
        $password=filterUser($_POST["password"]);
        if ($_POST["act"] == "login" && $username && $password ){
            
            //从数据库中选择密码判断用户名是否相同
            $result = $mysqli->query("select userPassword from userinfo where username='$username'");
            //把返回的结果数组化
            $row=$result->fetch_row();
            
            if ($row[0]==$password){
                echo "密码正确";
            }else {
                echo "密码错误";
            }
          
        }
    }
    
    //函数作用判断参数是否为空以及有空格
    function filterUser($str){
        if(empty($str)){
            echo "没有输入内容";
            return false;
        }elseif(trim($str)==""){
            echo "输入内容有空格";
            return false;
        }else{ 
        return trim($str);
        }
    }
?>



<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>登陆-嘉欣</title>
	<link rel="stylesheet" href="../static/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../static/css/global.css" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <div class="loginDiv">
            <div class="panel panel-default"  >
                <div class="panel-heading">管理员登陆</div>
                <div class="panel-body">
                    <form action="login.php" method="post">
                    <input type="hidden" name="act" value="login"/>
                    <div class="form-group">
                        <label for="username">用户名</label> 
                        <input type="text" class="form-control" id="username" name="username" placeholder="用户名"/>
                    </div>
                    <div class="form-group">
                        <label for="password">密码</label> 
                        <input type="password" class="form-control" id="password" name="password" placeholder="密码"/>
                    </div>
                         <input type="submit" class="btn btn-success" value="提交">
                </form>
                </div>
                
            </div>
            </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
      </div>
       
   

</body>
</html>
