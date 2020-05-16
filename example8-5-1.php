<html>
<body>
    <?php
        $link = mysqli_connect("localhost", "sample", "macbook", "sample");

        mysqli_set_charset($link, "utf8");

        $sql = "INSERT INTO address (username, zip, address1, address2, tel)" .
        "VALUES (" .
        "'" .$_POST["username"] . "'," .
        "'" .$_POST["zip"] . "'," .
        "'" .$_POST["address1"] . "'," .
        "'" .$_POST["address2"] . "'," .
        "'" .$_POST["tel"] . "');";

        mysqli_query($link, $sql);

        mysqli_close($link);

        echo "レコードを追加しました";
    ?>
</body>
</html>