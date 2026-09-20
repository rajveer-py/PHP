<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
    name
    <input type="text" name="name">
    <br>
    email
    <input type="text" name="email">
    <br>
    phone
    <input type="text" name="phone"> 
    <br> 
    depart
    <input type="text" name="depart"> 
    <br>
     salary
    <input type="text" name="salary"> 
    <br>  
<button type="submit">Submit</button>
</form>
</body>
</html>

<?php
include'db.php';

if($_SERVER["REQUEST_METHOD"]==='POST')
    {
        $name=$_POST["name"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $depart=$_POST["depart"];
        $salary=$_POST["salary"];
        
        $sql=$conn->prepare("insert into emp1 values(?,?,?,?,?)");
        $sql->bind_param('ssisd',$name,$email,$phone,$depart,$salary);

        if($sql->execute())
            {
                echo"data inserted";
            }
            else
                {
                    echo"data not inserted";
                }
    }

    ?>