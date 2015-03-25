<?php 
    header("Content-type:text/html;charset=utf-8");
    
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
    
    //从create.html取值并输出
    filter($_POST["title"]);
    filter($_POST["content"]);
    $_POST["tag"]; 
    echo $_POST["title"];
    echo "<br/>";
    echo $_POST["content"];
    print_r($_POST["tag"]);
?>