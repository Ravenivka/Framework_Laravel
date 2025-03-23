<html>
<head>
    <meta charset="UTF-8">
    <title>Логи</title>
    <style>
        td:nth-child(5),td:nth-child(6){text-align:center;}
        table{position:absolute; border-spacing:0; border-collapse: collapse; width: 70%; box-shadow: 0px 4px 180px rgb(255 255 255 / 25%);}
    </style>
</head>
<body>
<?php
try {
    $path = app_path("Data/data.db");
    $db = new SQLite3($path);  
    
    $sql = "SELECT id, time, duration, ip, url, method, input FROM logs";
    $result = $db->query($sql);  
    echo $path; 
    echo "<div class=\"table\">";
        echo "<table><tr><th>id</th><th>time</th><th>duration</th><th>ip</th><th>url</th><th>method</th><th>input</th></tr>";
        while ($result_row = $results->fetchArray(SQLITE3_ASSOC)) {
            echo "<tr>";
                echo "<td align=\"center\">" . $result_row["id"] . "</td>";
                echo "<td align=\"center\">" . $result_row["time"] . "</td>";
                echo "<td align=\"center\">" . $result_row["duration"] . "</td>";
                echo "<td align=\"center\">" . $result_row["ip"] . "</td>";
                echo "<td align=\"center\">" . $result_row["url"] . "</td>";
                echo "<td align=\"center\">" . $result_row["method"] . "</td>";
                echo "<td align=\"center\">" . $result_row["input"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    echo "</div>";
}
catch (Exception $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?>
</body>
</html>