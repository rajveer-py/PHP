<!DOCTYPE html>
<html>
<head>
    <title>GET Form</title>
</head>
<body>

<h2>Sign Up</h2>

<form method="GET" >

    Email:
    <input type="text" name="email">
    <br><br>

    Password:
    <input type="password" name="password">
    <br><br>

    <input type="checkbox" name="subscribe" value="yes">
    Subscribe to newsletter
    <br><br>

    <input type="submit" value="Sign Up">

</form>

</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD']=='GET')
{
$email = $_GET["email"];
$password = $_GET["password"];

if (isset($_GET["subscribe"])) {
    $status = "subscribed";
}
else {
    $status = "not subscribed";
}

echo "Thank you for signing up, $email You have . $status  to the newsletter.";

}

?>