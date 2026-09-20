<?php
include 'db.php';
$result=$conn->query("select*from emp1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
    <tr>
        <td>Name</td>
        <td>email</td>
        <td>phone</td>
        <td>depart</td>
        <td>salary</td>
        <tr>
    
    <?php
    while($row=$result->fetch_assoc()){ ?>
    <tr>
        <td> <?php echo $row["name"]; ?> </td>
        <td> <?php echo $row["email"]; ?> </td>
        <td> <?php echo $row["phone"]; ?> </td>  
         <td> <?php echo $row["depart"]; ?> </td>  
        <td> <?php echo $row["salary"]; ?> </td>  
</tr>
<?php } ?>
</table> 
</body>
</html>   