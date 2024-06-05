<?php
    error_reporting(0);//錯誤報告關閉
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";
        //並在3秒後重定向到登入頁面
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=23.bulletin_add.php>
                    標    題：<input type=text name=title><br>
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br> 
                    佈告類型：<input type=radio name=type value=1>系上公告 
                            <input type=radio name=type value=2>獲獎資訊
                            <input type=radio name=type value=3>徵才資訊<br>
                    發布時間：<input type=date name=time><p></p>
                    <input type=submit value=新增佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
    }
    //15 => 標題輸入框
    //16~18 => 布告類型選擇(單選按鈕)
    //20 => 發布時間選擇
    
?>


