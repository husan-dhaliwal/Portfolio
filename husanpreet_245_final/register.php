<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Save user data to a file 

    $usersFile = "../users.txt";
    $userRecord = "Username: $username\nPassword: $password\n\n";
    file_put_contents($usersFile, $userRecord, FILE_APPEND);

    echo "Registration successful. <a href='fan.php'>Go back</a>";
}
?>