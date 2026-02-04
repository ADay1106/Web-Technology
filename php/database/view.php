<?php
include "db.php";

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Students Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #dddddd;
        }
        a {
            text-decoration: none;
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Students Records</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Marks</th>
        <th>Action</th>
    </tr>

    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['marks']; ?></td>
            <td>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>

</body>
</html>