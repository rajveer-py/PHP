<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <form method="POST">
    Name
	<input type="text" name="name">
	<br>
	Age
	<input type="text" name="Age">
	<br>

    <select name="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
</select>
        <br>

<button type="submit">Submit</button>

    
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"]==='POST')
    {
        $name=$_POST["name"];
        $age=$_POST["Age"];
        $gender=$_POST["gender"];

      echo "Hello, $name You are $age years old and identify as $gender";


    }

    ?>