<?php
// Include the database connection file
require_once("depankonek.php");

// Fetch data in descending order (latest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>    
    <title>CRUD PHP NATIVE by Devanno - Pemrogramman Web R.02</title>
</head>

<body>
    <center><h2>CRUD PHP NATIVE by Devanno - Pemrogramman Web R.02</h2>
	<h3>CRUD sederhana tanpa css/style lainnya berisikan add, edit, delete</h3>
    <p>
        <a href="add.php">Add New Data</a>
    </p>
    <table width='50%' border=0>
        <tr bgcolor='#DDDDDD'>
            <td><strong>Username</strong></td>
            <td><strong>Password</strong></td>
            <td><strong>Nama Lengkap</strong></td>
            <td><strong>Email</strong></td>
            <td><strong>Action</strong></td>
        </tr>
        <?php
        // Fetch the next row of a result set as an associative array
        while ($res = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$res['username']."</td>";
            echo "<td>*****</td>";  // Display password as hidden
            echo "<td>".$res['namalengkap']."</td>";
            echo "<td>".$res['email']."</td>";    
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | 
            <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        }
        ?>
    </table>
	</center>
</body>
</html>
