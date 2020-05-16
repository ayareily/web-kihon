<html>
<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>username</th>
            <th>zip</th>
            <th>address1</th>
            <th>address2</th>
            <th>tel</th>
        </tr>
    
        <?php
            $link = mysqli_connect("localhost", "sample", "macbook", "sample");

            mysqli_set_charset($link, "utf8");

            $result = mysqli_query($link, "SELECT * FROM address;");

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row["id"])."</td>";
                echo "<td>" . htmlspecialchars($row["username"])."</td>";
                echo "<td>" . htmlspecialchars($row["zip"])."</td>";
                echo "<td>" . htmlspecialchars($row["address1"])."</td>";
                echo "<td>" . htmlspecialchars($row["address2"])."</td>";
                echo "<td>" . htmlspecialchars($row["tel"])."</td>";
                echo "</tr>";
            }

            mysqli_free_result($result);

            mysqli_close($link);
        ?>
    </table>
</body>
</html>