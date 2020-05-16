<html>
<body>
    
<?php
    session_start();
    if (!isset($_POST["order"])) {
        unset($_SESSION["order"]);
    } else {
        $ordervalue = $_POST["order"];
        $_SESSION["order"] = $ordervalue;
    }
?>
商品を設定しました。<br>
<a href="example7-2-2.php">決済ページ</a>

</body>
</html>