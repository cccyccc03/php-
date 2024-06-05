<?php
    session_start();//錯誤報告關閉
    unset($_SESSION["id"]);
    echo "登出成功....";
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";//檢查用戶是否登入，否就顯示提示信息

?>
<!--登出>