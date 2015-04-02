<?php
    header("Content-type:text/html;charset=utf-8");
    require_once 'config/inc.php';
    
    //请求页面的id
    $id=$_GET["id"];
    $result=$mysqli -> query("select * from article where id='$id'");
    $row=$result->fetch_row();
    
    
    $id=$row[0];
    $title=$row[1];
    $content=$row[3];
    $tag=$row[2];
    $clickNumber=$row[4];
    $source=$row[6];
        
?>    



<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>文章显示</title>
	<link rel="stylesheet" href="static/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="static/css/global.css" />
</head>
<body>
    <div class="header">
        <div class="container">
           <div class="row">
           <div class="col-sm-2"></div>
           <div class="col-sm-6">
                <div class="myself"><a href="" >myself</a></div>
            </div>
            <div class="col-sm-4">
                <ul class="list-inline">
                    <li><a href="" class="link">首页</a></li>    
                    <li><a href="" class="link">文章</a></li>          
                </ul>
            </div>
           </div>
        </div>
    </div>
    
    <div class="container">
        <div>
            <div class="total">
                <div class="title"><h2><?php echo $title;?></h2></div>
                <div class="title-top">
                    <span>点击量 &nbsp;<?php echo $clickNumber;?> </span>
                    <span>&nbsp;|&nbsp;标签 <?php echo $tag;?> </span>
                </div>
                <div class="content"><?php echo $content;?></div>
    
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div>myself</div>
            <div>xxxxx@xxx.com</div>
        </div>
    </div>
</body>
</html>