<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BWS Sports</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Garamond', serif;
    margin: 0;
    padding: 0;
    color: #333;
    background-image: url('pupu.png');
    background-size: cover; /* Adjusts the size to cover the entire background */
    /* Prevents the background from repeating */
}

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px 0;
        }

        /* Header Styles */
        .header {
    text-align: center;
    padding: 30px 0; /* Increase padding for more space */
   background-image: "pupu.jpg";
    margin-bottom: 20px; /* Add some space below the header */
    position: relative; /* Create a positioning context */
    font-family: 'Garamond', serif;
}

.header h1 {
    font-size: 4rem; /* Increase font size for the main header */
    margin: 10px 0; /* Adjust margin for spacing */
    color: black;
    font-family: 'Garamond', serif;
}

.header h2 {
    font-size: 1.5rem; /* Increase font size for the subheader */
    color: black;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin-bottom: 40px; /* Add more space below the subheader */
    font-family: 'Garamond', serif;
}

.header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
   
     /* Adds the blurry effect to the background image */
     /* Place behind the text */
}

     

        /* Product Cards Styles */
        .product-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .product-card {
            width: calc(33% - 20px);
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            text-align: center;
            overflow: hidden;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            width: 100%;
            border-radius: 5px 5px 0 0;
        }

        .product-card .details {
            padding: 15px;
        }

        .product-card h3 {
            margin-top: 0;
            font-size: 2rem;
            color: #333;
        }

        .product-card p {
            font-size: 1.5rem;
            color: #666;
        }

        /* Explore More Button */
        .explore-more {
            text-align: center;
            margin-top: 20px;
        }

        .explore-more button {
            padding: 20px 40px; /* Adjust button size */
            background-color: brown;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .explore-more button:hover {
            background-color: burlywood;
        }

        /* Login Form */
        
        .login-form {
            width: 300px;
            padding: 20px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            color: black;
            text-align: center;
            margin-top: 20px;
            text-align: center; /* Center align the content inside the form */
    margin: 20px auto;
        }

        .login-form form {
            margin: 0;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: black;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
            color: black;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            background-color: brown;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: burlywood;
        }

        .error {
            color: bla;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Bws Sports</h1>
            <h2>SHOP NOW!</h2>
          
        </div>

        <div class="product-container">
            <div class="product-card">
                <img src="lplo.png" alt="Product 1">
                <div class="details">
                    <h3>SHOES CATEGORY</h3>
                    <p>FIND YOUR FAVOIES!🎉</p>
                    <p>$20-70</p>
                </div>
            </div>

            <div class="product-card">
                <img src="vgvg.png" alt="Product 2">
                <div class="details">
                    <h3>VARIETY OF BALLS!</h3>
                    <p>FIND A COLLECTION OS SPORTS BALLS!🎉</p>
                    <p>$50-60</p>
                </div>
            </div>

            <div class="product-card">
                <img src="olala.png" alt="Product 3">
                <div class="details">
                    <h3>READY TO GO CAPS!</h3>
                    <p>BRIGHT COLORS RANGE OF CAPS!🎉</p>
                    <p>$43-50</p>
                </div>
            </div>
        </div>

        <div class="explore-more">
        <a href="home1.php"><button>Explore More <span>&rarr;</span></button></a>
    </div>
    </div>
    <div class="login-form">
    <form action="login.php" method="post">
<!--        --><?php //if (isset($_GET['error'])) { ?>
<!--            <p class="error">--><?php //echo $_GET['error']; ?><!--</p>-->
<!--        --><?php //} ?>

        <label>User Name/E-mail</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit">Login</button>
    </form>
</div>



    
    
</body>
</html>
