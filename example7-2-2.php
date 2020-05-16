<html>
<body>
    
決済ページ

<?php
    if ((!isset($_COOKIE["order"])) || ($_COOKIE["order"] == "")) {
        echo "商品が選択されていません";
    } else {
        $ordervalue = $_COOKIE["order"];
        echo $ordervalue . "の購入手続きを進めます";
    }
?>
<br>
<a href="example7-2-1.html">商品を選択し直す</a>
</body>
</html>