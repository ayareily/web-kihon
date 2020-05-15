<html>
<body>
    
<?php
    $a = array('リンゴ', 'バナナ', 'ミカン', 'ジャガイモ', 'トマト');
    echo "<table border ='1'>\n";
    for ($i = 0; $i < count($a); $i++) {
        echo "<tr><td>" . $a[$i] . "</td></tr>\n";
    }
    echo "</table>"
?>

</body>
</html>