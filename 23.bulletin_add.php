<?php
    error_reporting(0);//錯誤報告關閉
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";//並在3秒後重定向到登入頁面
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";
        //sql命令：insert into bulletin(title, content, type, time) values ('標題','內容',1,'2024-02-29')
        //type型態為int，值不需要加上單引號
        if (!mysqli_query($conn, $sql)){
            echo "新增命令錯誤";
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }

        //新增成功，三秒可以回到網頁
    }
?>
