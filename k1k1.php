
<html>
<body>

<form action="welcome_get.php" method="GET">
  Name: <input type="text" name="name">
  E-mail: <input type="text" name="email">

</form>
</body>
</html>

<?php
// Start the session
session_start();

// Check if both name and email are provided via GET method
if(isset($_GET['name']) && isset($_GET['email'])) {
    // Store name and email in session variables
    $_SESSION['name'] = $_GET['name'];
    $_SESSION['email'] = $_GET['email'];

    // Redirect to another page or do any other processing
    header("Location: another_page.php");
    exit();
} else {
    // Handle case when name or email is not provided
    echo "Name and email are required!";
}
?>
