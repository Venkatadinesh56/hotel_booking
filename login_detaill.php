<?php
$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "proj";

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
    exit;
}

$email = $_POST['email'];

$sql = "SELECT * FROM ks WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Query failed: " . mysqli_error($conn);
    exit;
}

$user = mysqli_fetch_assoc($result);



$password = $_POST['password'];

$sql2 = "SELECT * FROM ks WHERE password = '$password'";
$result2 = mysqli_query($conn, $sql2);

if (!$result2) {
    echo "Query failed: " . mysqli_error($conn);
    exit;
}

$user2 = mysqli_fetch_assoc($result2);
if($user && $user2)
{
    echo "your login is successfully completed";
}
else{
if (!$user) {
    echo "User not found.";
    exit;
}
if (!$user2) {
    echo "invalid password.";
    exit;
}
}



mysqli_close($conn);
?>
<div>
<a href="index.html">home</a>
</div>