<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Art-Pharm</h1>
        </div>
        <ul>
            <li><img src="assets/dashboard-65-16.png" alt=""> Dashboard</li>
            <li><img src="assets/products.png" alt="">Catalog</li>
            <li><img src="assets/group.png" alt="">Users</li>
            <li><img src="assets/information.png" alt="">Help</li>
        </ul>
       <a href="admin_page.php">
           <button type="submit"><img src="assets/backward.png" alt="" class="back-img"> Back</button>
        </a>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Serach..">
                    <button type="submit"><img src="assets/search.png" alt=""></button>
                </div>
                <div class="user">
                    <img src="assets/Logoja e artpharm-03.png" alt="art pharm" id="logo">
                </div>
            </div>
        </div>

        <div class="content">
            <div class="cards">
               <div class="card">
                   <div class="box">
                      <h1>10+</h1>
                      <h3>Hair <br>
                         Products</h3>
                    </div>
                    <div class="icon-case">
                      <img src="assets/premium-service.png" class="ikona">
                    </div>
               </div>
               <div class="card">
                   <div class="box">
                      <h1>10+</h1>
                      <h3>Gummies</h3>
                    </div>
                    <div class="icon-case">
                      <img src="assets/gummy-bear.png" alt="" class="ikona">
                    </div>
               </div>
               <div class="card">
                   <div class="box">
                      <h1>30+</h1>
                      <h3>FaceCare <br>
                         Products</h3>
                    </div>
                    <div class="icon-case">
                      <img src="assets/product.png" alt="" class="ikona">
                    </div>
               </div>
               <div class="card">
                   <div class="box">
                      <h1>100+</h1>
                      <h3>HealthCare <br>
                        Products</h3>
                    </div>
                    <div class="icon-case">
                      <img src="assets/pharmacy.png" alt="" class="ikona">
                    </div>
               </div>
            </div>
            <section id="dashboard">
                <div class="row text-center">
                    <h1 id="insert-text">Insert Data</h1>
                    <form action="dashboard.php" method="post">
                        <input type="text" name="prdct_id" placeholder="product id"><br><br>
                        <input type="text" name="prdct_name" placeholder="product name"><br><br>
                        <input type="text" name="prdct_price" placeholder="product price"><br><br>
                        <input type="text" name="prdct_qty" placeholder="product quantity"><br><br>
                        <input type="submit" name="submit" value="insert" class="insrt-btn"><br><br>
                    </form>
                    <button><a href="catalog.php">catalog</a></button>

                </div>
            </section>
        </div>
        <section id="catalog">
          <p class="text-1">Browse our Recents</p> 
        </section>
    </div>
    
</body>
</html>
<?php
error_reporting(0);
include 'connection.php';

if(isset($_POST['submit'])){

    $prdct_id = $_POST['prdct_id'];
    $prdct_name = $_POST['prdct_name'];
    $prdct_price = $_POST['prdct_price'];
    $prdct_qty = $_POST['prdct_qty'];

    $sql = "INSERT INTO 'catalog' VALUES('$prdct_id', '$prdct_name', '$prdct_price', '$prdct_qty')";

    $data=mysqli_query($con,$sql);

    if($data){
        echo "insert";
    }else{
        echo "sorry";
    }
}


?>