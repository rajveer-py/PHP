<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
    Salary
    <input type="text" name="salary">
    <br>
    Name
    <input type="text" name="name">
    <br>
<button type="submit">Submit</button>
</form>
</body>
</html>


<?php
include'db.php';
if($_SERVER["REQUEST_METHOD"]==='POST')
    {
        $salary=$_POST["salary"];
        $name=$_POST["name"];
        
        
        $sql=$conn->prepare("update emp1 set salary=? where name=?");
        $sql->bind_param('ds',$salary,$name);

        if($sql->execute())
            {
                echo"data updated";
            }
            else
                {
                    echo"data not updated";
                }
    }

    ?>