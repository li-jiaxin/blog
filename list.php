<?php 
    header("Content-type:text/html;charset=utf-8");
    require_once 'config/inc.php';
        
    $result=$mysqli -> query("select id,title from article");    
    
    
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
        <div class="post">
            <ul class="list-unstyled">
                <li>
                    <span>xxxx-xx-xx |</span>
                    <a href="detail.php?id=7">aaa</a>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
    
    