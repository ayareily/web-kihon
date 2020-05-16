<html>
<body>
    
<?php
    if (!isset($_POST["order"])) {
        setcookie("order", "", time() - 3600);
    } else {
        $ordervalue = $_POST["order"];
        setcookie("order", $ordervalue);
    }
?>
商品を設定しました。<br>
<a href="example7-2-2.php">決済ページ</a>

</body>
</html>