<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "");
    $result = mysqli_select_db($conn, "filestore");
    $result = $conn->query("select * from file");

    echo "<table class='table table-hover'>";
    echo "<th>id</th><th>name</th>";

    while ($row = mysqli_fetch_row($result)) {
        echo "<tr class='info'><td>" . $row[0] . "</td>" . "<td><a href='#'> " . $row[1] . "</a></td></tr>";
    }
    echo "</table>";

    ?>

</body>

</html>