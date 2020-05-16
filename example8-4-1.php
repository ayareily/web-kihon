<html>
<body>
    
<?php
    $link = mysqli_connect("localhost", "sample", "macbook", "sample");

    mysqli_set_charset($link, "utf8");

    mysqli_query($link, "INSERT INTO address (username, zip, address1, address2, tel)" .
    "VALUES ('田中　次郎', '227-0062', '神奈川県', '横浜市青葉台1-2-3', '045-678-9012');");

    mysqli_close($link);

    echo 'レコードを追加しました';
?>

</body>
</html>