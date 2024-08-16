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

if (isset($_POST["add"])) {
    $productId = $_GET["id"];
    $productQuantity = $_POST["quantity"];
    $productName = $_POST["hidden_name"];
    $productImage = $_POST["hidden_image"];
    $productPrice = $_POST["hidden_price"];

    $sql = "INSERT INTO `product_second` (`description`, `image`, `price`, `quantity`) VALUES ('$productName', '$productImage', '$productPrice', '$productQuantity')";
    mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
    
</head>
<body>
<div class="banner">
        
        </div>
        <header>
            <div class="header-left">
                <h1>BWS-Main Store</h1>
            </div>
            <div class="header-right">
            <a href="cart1.php">cart</a>
                <a href="logout.php">Logout</a>
            </div>
        </header>
    
        <div class="shop-heading">
            <p>  "Explore our collection of popular items"🎉✨</p>
        </div>
    
    
    <main>
        <div class="product-container">
            <?php
            $query = "SELECT * FROM `product_first` ORDER BY id ASC";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="product">
                        <form action="home1.php?action=add&id=<?php echo $row["id"] ?>" method="post">
                        <img src="images/<?php echo $row["image"]; ?>" alt="">
                            <h3><?php echo $row["description"] ?></h3>
                            <p>$<?php echo $row["price"]; ?></p>
                            <input type="text" id="quantity" name="quantity" value="1">
                            <input type="hidden" name="hidden_image" value="<?php echo $row["image"]; ?>">
                            <input type="hidden" name="hidden_name" value="<?php echo $row["description"]; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                            <input type="submit" name="add" value="Add to Cart">
                        </form>
                    </div>
                    <?php
                }
            } else {
                echo "No products found!";
            }
            
                    

            ?>
        </div>
    </main>


    <div class="contact-card">
    <h2>Contact Us</h2>
    <p class="stay-updated">Stay updated with our latest offers!</p>
 <div class="subscription-form">
        <form class="form-wrapper">
            <div class="email-subscribe">
                <input type="email" placeholder="Enter your email" required>
                <button type="submit">Subscribe</button>
            </div>
        </form>
    </div>
    <div class="social-handles">
        <a href="#" class="twitter"><img src="twitter_logo.png" alt="Twitter"></a>
        <a href="#" class="facebook"><img src="facebook_logo.png" alt="Facebook"></a>
    </div>
</div>
        </div>
</div>

</div>

</div>
</body>
</html>


