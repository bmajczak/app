<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td, th {
            border: 1px solid black;
       }
    </style>
</head>
<body>
    test
    <h1>dane z tabeli</h1>
<?php

$mysqli = new mysqli("192.168.56.11","app","app123","users");
if ($mysqli -> connect_errno) {
          echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
}

$sql = "select * from user;";
echo "<table>";
echo "<tr><th>id</th><th>imie</th><th>nazwisko</th></tr>";
if ($result = $mysqli -> query($sql)) {
        while ($row = $result -> fetch_row()) {
                echo "<tr><td>";
                echo $row[0];
                echo "</td><td>";
                echo $row[1];
                echo "</td><td>";
                echo $row[2];
                echo "</td></tr>";
        }
        $result -> free_result();
}
echo "</table>";
$mysqli -> close();

?>
</body>
</html>
