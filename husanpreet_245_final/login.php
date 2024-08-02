<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['loginUsername'];
    $password = $_POST['loginPassword'];



    $usersFile = "../users.txt";
    $usersData = file_get_contents($usersFile);

    // Parse the users data and verify the credentials
    $users = explode("\n\n", trim($usersData));
    $isAuthenticated = false;
    foreach ($users as $user) {
        list($storedUsername, $storedPassword) = explode("\n", $user);
        $storedUsername = str_replace("Username: ", "", $storedUsername);
        $storedPassword = str_replace("Password: ", "", $storedPassword);
        if ($username === $storedUsername && password_verify($password, $storedPassword)) {
            $isAuthenticated = true;
            break;
        }
    }

    if ($isAuthenticated) {
        echo "Login successful. ";
    } else {
        echo "Invalid username or password. <a href='fan.php'>Try again</a>";
    }
}
?>