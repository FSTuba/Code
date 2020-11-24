<?php
include("connMySQL.php");
$sql_query = "SELECT * FROM member ORDER BY id ASC";
$result = mysqli_query($db_link, $sql_query);
$total_records = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>會員資料的 CRUD 練習</title>
</head>

<body>
    <h1 align="center">會員資料總表</h1>
    <p align="center">目前資料筆數：<?php echo $total_records; ?>，<a href='create.php'>新增資料</a></p>

    <table border="1" align="center">
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>帳號</th>
            <th>密碼</th>
            <th>Email</th>
        </tr>
        <?php

        while ($row_result = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row_result['id'] . "</td>";
            echo "<td>" . $row_result['user_name'] . "</td>";
            echo "<td>" . $row_result['account'] . "</td>";
            echo "<td>" . $row_result['password'] . "</td>";
            echo "<td>" . $row_result['email'] . "</td>";
            echo "<td><a href='update.php?id=" . $row_result['id'] . "'>修改</a> ";
            echo "<a href='delete.php?id=" . $row_result['id'] . "'>刪除</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>