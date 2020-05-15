<html>
<body>
<?php
    $h = array(
        "apple" => "リンゴ",
        "banana" => "バナナ",
        "orange" => "ミカン",
        "potato" => "ジャガイモ",
        "tomato" => "トマト"
    );

    $key = $_POST["english"];
    if (array_key_exists($key, $h)){
        echo $h[$key];
    } else {
        echo $key . "は、登録されていません";
    }
?>    
</body>
</html>