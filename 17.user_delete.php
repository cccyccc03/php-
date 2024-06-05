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
        $sql="delete from user where id='{$_GET["id"]}'";//把ID抓過來這裡，get傳過來，變數名稱為ID的參數
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            //如果執行失敗，會顯示錯誤信息
            echo "使用者刪除錯誤";
        }else{
            echo "使用者刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
         //檢查用戶是否登入，否就顯示提示信息
    }
?>



<!--需要特別設這個，不然別人知道IP之後可以直接把ID刪除

使用GET資料傳遞方式，把id=tony這個參數傳遞過去
使用$_GET["id"]，擷取上個頁面用GET方法傳過來，變數名稱為id的參數(tony)