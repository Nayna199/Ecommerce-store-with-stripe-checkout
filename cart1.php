<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "productdb";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_GET["action"]) && $_GET["action"] == "delete"){
    $productName= $_GET["name"];
    $deleteQuery = "DELETE FROM `product_second` WHERE description = '$productName'";

    mysqli_query($conn, $deleteQuery);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
   
<header>
            <div class="header-left">
                <h1>BWS-Main Store</h1>
            </div>
            <div class="header-right">
            <a href="home1.php">Shop</a>
                <a href="logout.php">Logout</a>
            </div>
        </header>
    
        <div class="shop-heading">
            <p> My Cart✨</p>
        </div>
    



<div class="table_container">
    <table>
        <tr>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Remove Items</th>
        </tr>
        <?php 
        $query="SELECT* FROM `product_second` ORDER BY id ASC";
        $result = mysqli_query($conn,$query);
        $total =0;
        if(mysqli_num_rows($result)>0){
            while($row= mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><img src="images/<?php echo $row["image"];?>" alt=""></td>
                    <td><?php echo $row["description"];?></td>
                    <td><?php echo $row["price"];?></td>
                    <td><?php echo $row["quantity"];?></td>

                   <td><?php echo number_format($row["quantity"]*$row["price"],2);?></td>
                    <td><a href="cart1.php?action=delete&name=<?php echo $row["description"];?>"><span>Remove Item</span></a></td>
                <?php 
                $total =$total + ($row["quantity"]*$row["price"]);
                
               
            }
        } ?>

                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Total:</td>
                    <td><?php echo number_format($total ,2);?></td>
                    <td><button onclick="window.location.href='payment.php'" >Proceed to Payment</button></td>
                </tr>
        
    </table>
    
</div>
    
</body>
</html>