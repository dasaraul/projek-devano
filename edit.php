<?php
// Include the database connection file
require_once("depankonek.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$username = $resultData['username'];
$password = $resultData['password'];
$namalengkap = $resultData['namalengkap'];
$email = $resultData['email'];
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
<center>
<body>
    <h2>Edit Data</h2>
    <p>
        <a href="index.php">Home</a>
    </p>
    
    <form name="edit" method="post" action="editAction.php">
        <table border="0">
            <tr> 
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr> 
                <td>Nama Lengkap</td>
                <td><input type="text" name="namalengkap" value="<?php echo $namalengkap; ?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
</center>
    </form>
</body>
</html>
