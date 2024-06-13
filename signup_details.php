<?php
$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "proj";

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "connection failed:" . mysqli_connect_error();
    exit;
}

$name = $_POST["name"];
$number = $_POST["number"];
$email = $_POST["email"];
$password = $_POST["password"];
$collegename = $_POST["collegename"];
$sex = $_POST["sex"];

// Use prepared statement to insert data
$sq = "INSERT INTO ks (name, number, email, password, collegename, sex) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sq);

// Bind parameters
mysqli_stmt_bind_param($stmt, "sissss", $name, $number, $email, $password, $collegename, $sex);

// Execute the statement
$result = mysqli_stmt_execute($stmt);

if (!$result) {
    echo "error:" . mysqli_error($conn);
    exit;
}

echo "successfully registered";


mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
<div>
<a href="login.php">Login</a>
</div>
