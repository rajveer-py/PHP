<?php
include 'db.php';
if($_SERVER["REQUEST_METHOD"]==='POST')
    {
        $productname=$_POST['productname'];
        $category =$_POST['category'];
        $price=$_POST['price'];
        $quantity=$_POST['quantity'];
        $suppliername=$_POST['suppliername'];

        $sql=$conn->prepare("insert into product values(?,?,?,?,?)");
        $sql->bind_param("ssiss",$productname,$category,$price,$quantity,$suppliername);

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