<?php
include 'db.php';
session_start();
if($_SERVER["REQUEST_METHOD"]==='POST')
    {
        $productname=$_POST['productname'];
        $category =$_POST['category'];
        $price=$_POST['price'];
        $quantity=$_POST['quantity'];
        $suppliername=$_POST['suppliername'];

        $sql=$conn->prepare("insert into product values(?,?,?,?,?)");
        $sql->bind_param("ssiss",$productname,$category,$price,$quantity,$suppliername);
        $sql->execute();
    }
$results=$conn->query("select*from product");
?>
<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
             <nav
                class="navbar navbar-expand-md navbar-light bg-light"
             >
                <div class="container">
                    <a class="navbar-brand" href="#">Welcome<?php  echo $_SESSION['name']?></a>
                    <button
                        class="navbar-toggler d-lg-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId"
                        aria-controls="collapsibleNavId"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" aria-current="page"
                                    >Home
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="dropdownId"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    >Dropdown</a
                                >
                                <div
                                    class="dropdown-menu"
                                    aria-labelledby="dropdownId"
                                >
                                    <a class="dropdown-item" href="#"
                                        >Action 1</a
                                    >
                                    <a class="dropdown-item" href="#"
                                        >Action 2</a
                                    >
                                </div>
                            </li>
                        </ul>
                        <form class="d-flex my-2 my-lg-0">
                            <input
                                class="form-control me-sm-2"
                                type="text"
                                placeholder="Search"
                                action=""
                            />
                            <button
                                class="btn btn-outline-success my-2 my-sm-0"
                                type="submit"
                            >
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
             </nav>
             
        </header>
        <main>
         
        <h4 class= text-center> Add Products </h4>
        <div
            class="container"
        >

        <form action="" method="POST">
            <div class="mb-3">
                <label for="" class="form-label">Productname</label>
                <input
                    type="text"
                    class="form-control"
                    name="productname"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Category</label>
                <input
                    type="text"
                    class="form-control"
                    name="category"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
               
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input
                    type="text"
                    class="form-control"
                    name="price"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Quantity</label>
                <input
                    type="text"
                    class="form-control"
                    name="quantity"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
               
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Supplier name</label>
                <input
                    type="text"
                    class="form-control"
                    name="suppliername"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
               
            </div>
            <button
                type="submit"
                class="btn btn-primary"
            >
                Submit
            </button>
            
        </form>

        <h3 class=text-center>Dashboard </h3>
        <div
            class="container"
        >
            <div
                class="table-responsive"
            >
                <table
                    class="table table-primary"
                >
                    <thead>
                        <tr>
                            <th scope="col">Product name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">quantity</th>
                            <th scope="col">suppliername</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=$results->fetch_assoc()) { ?>
                        <tr class="">
                            <td scope="row"><?=$row['productname']?></td>
                            <td><?=$row['category']?></td>
                            <td><?=$row['price']?></td>
                            <td><?=$row['quantity']?></td>
                            <td><?=$row['suppliername']?></td>
                             <td>
                                <a
                                    name=""
                                    id=""
                                    class="btn btn-primary"
                                    href="edit.php?productname=<?=$row['productname']?>"
                                    role="button"
                                    >edit</a
                                >
                                
                             </td>
                             <td>
                                <a
                                    name=""
                                    id=""
                                    class="btn btn-primary"
                                    href="delete.php?productname=<?=$row['productname']?>"
                                    role="button"
                                    >Delete</a
                                >
                                
                             </td>
                            
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            
        </div>
        
            
        </div>


        
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
