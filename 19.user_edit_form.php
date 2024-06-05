<html>
    <head><title>修改使用者</title></head>
    <body>
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
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");//把ID抓過來這裡，get傳過來，變數名稱為ID的參數
        $row=mysqli_fetch_array($result);
        echo "
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        ";
    }
    ?>
    </body>
</html>
