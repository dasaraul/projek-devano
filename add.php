<html>
<head>
    <title>Add Data</title>
</head>
<center>
<body>
    <h2>Add Data</h2>
    <p>
        <a href="index.php">Home</a>
    </p>

    <form action="addAction.php" method="post" name="add">
        <table width="25%" border="0">
            <tr> 
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr> 
                <td>Nama Lengkap</td>
                <td><input type="text" name="namalengkap"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>
