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
    <input type="text" name="id">
    <br>
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
        
        $sql=$conn->prepare("delete from emp1 where name=?");
        $sql->bind_param('is',$name);

        if($sql->execute())
            {
                echo"data deleted";
            }
            else
                {
                    echo"data not deleted";
                }
    }

?>