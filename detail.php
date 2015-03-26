<?php
    header("Content-type:text/html;charset=utf-8");
    require_once 'config/inc.php';
    
    //请求页面的id
    $id=$_GET["id"];
    $result=$mysqli -> query("select * from article where id='$id'");
    $row=$result->fetch_row();
    print_r($row);
    
    $id=$row[0];
    $title=$row[1];
    $content=$row[2];
    $tag=$row[3];
    $clickNumber=$row[4];
    $source=$row[6];
?>    



<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>文章显示</title>
</head>
<body>
	<ul>
       <li>id:<?php echo $id;?></li>
       <li>title:<?php echo $title;?></li>
       <li>content:<?php echo $content;?></li>
       <li>tag:<?php echo $tag;?></li>
       <li>clickNumber:<?php echo $clickNumber;?></li>
       <li>source:<?php echo $source;?></li>
    </ul>
</body>
</html>