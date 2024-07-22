<?php
// Include the database connection file
require_once("depankonek.php");

if (isset($_POST['update'])) {
    // Escape special characters in a string for use in an SQL statement
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $password = mysqli_real_escape_string($mysqli, password_hash($_POST['password'], PASSWORD_DEFAULT));
    $namalengkap = mysqli_real_escape_string($mysqli, $_POST['namalengkap']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);    
    
    // Check for empty fields
    if (empty($username) || empty($password) || empty($namalengkap) || empty($email)) {
        if (empty($username)) {
            echo "<font color='red'>Username field is empty.</font><br/>";
        }

        if (empty($password)) {
            echo "<font color='red'>Password field is empty.</font><br/>";
        }

        if (empty($namalengkap)) {
            echo "<font color='red'>Nama Lengkap field is empty.</font><br/>";
        }
        
        if (empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
    } else {
        // Update the database table
        $result = mysqli_query($mysqli, "UPDATE users SET `username` = '$username', `password` = '$password', `namalengkap` = '$namalengkap', `email` = '$email' WHERE `id` = $id");
        
        // Display success message
		echo "<center>";
        echo "<p><font color='green'>Data updated successfully!</p>";
        echo "<a href='index.php'>View Result</a>";
    }
}
?>
