<?php 
    header("Content-type:text/html;charset=utf-8");
    require_once '../config/inc.php';
    session_start();
    //判断是否登陆
    if(!isset($_SESSION["username"])){
        echo "aaa";      
        exit();
    }
    
    //从create.html取标题、内容的值
    $title=filter($_POST["title"]);
    $content=filter($_POST["content"]);
    $tag=$_POST["tag"];
    $tag=json_encode($tag);
    $isMine=$_POST["isMine"];
    $source=$_POST["source"];
    if($isMine==1){
        $source=1;
    }else {
        $source=$_POST["source"];
    }
    
    
    $insert="insert into article (title,tag,content,clickNumber,isMine,source) values ('$title','$tag','$content',0,'$isMine','$source')";
    
    $result = $mysqli -> query($insert);
    if($result){
        echo '发表成功';
    }else{
        echo '发表失败';
    }
    
    //判断标题和内容
    function filter($str){
            if(empty($str)){
                echo "没有输入内容";
                return false;
            }elseif(trim($str)==""){
                echo "输入内容有空格<br/>";
                return false;
            }else{
                return trim($str);
            }
    }
    
    
    
    
   
?>