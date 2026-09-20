<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method='POST'>

Name
<input type="text" name="name">
<br>   
Email
<input type="text" name="email">
<br>  
password
<input type="password" name="password">
<br>  
cpassword
<input type="password" name="cpassword">
<br>
<button type="submit"> Submit </button>      
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"]==='POST')
    {
        $name=$_POST["name"];
        $age=$_POST["Age"];
        $gender=$_POST["gender"];
    }