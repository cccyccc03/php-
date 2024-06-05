<?php

    error_reporting(0);//錯誤報告關閉
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        //建立資料庫連結
        //$conn=mysqli_connect(ip,帳號,密碼,資料庫)
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){
            //如執行失敗，會顯示錯誤訊息
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
            //檢查用戶是否登入，否就顯示提示信息
        }else{
            echo "修改成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }
    }
    //sql命令：update user set pwd='tony123' where id='tony'

?>


