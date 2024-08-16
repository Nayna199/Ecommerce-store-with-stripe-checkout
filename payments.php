<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stripe_payment";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="payment_style.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-creditcardvalidator/1.0.0/jquery.creditCardValidator.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
    <header>
        <h1>Payment Page</h1>
        <nav>
            <a href="cart1.php">Back to Cart</a>
        </nav>
    </header>

    <main>
        <section class="payment-form">
            <h2>Payment Details</h2>
            <form action="process_payment.php" method="post" id="payment-form">
                <label for="full_name">Full Name:</label>
                <input type="text" id="full_name" name="full_name" required>
                
                <label for="address">Address:</label>
                <textarea id="address" name="address" required></textarea>
                
                <label for="payment_option">Select Payment Option:</label>
                <select id="payment_option" name="payment_option" required>
                    <option value="stripe">Stripe</option>
                    <option value="easypaisa">Cash On Delivery</option>
                </select>

                <div id="stripe_payment" class="payment-details">
        
                    <label for="card-element">Credit or debit card</label>
                    <div id="card-element">

                    <!--For stripr element-->
                    </div>
                
                    <div id="card-errors" role="alert"></div>
                </div>

                <button type="submit">Submit Payment</button>
            </form>
        </section>
    </main>

    <script>
      var stripe = Stripe('pk_test_...'); // Replace 'pk_test_...' with your actual publishable key

var elements = stripe.elements();
var cardElement = elements.create('card');

cardElement.mount('#card-element');

var form = document.getElementById('payment-form');

form.addEventListener('submit', function(event) {
    event.preventDefault();

    stripe.createToken(cardElement).then(function(result) {
        if (result.error) {
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
        } else {
            var token = result.token.id;

            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token);
            form.appendChild(hiddenInput);

            // Now submit the form to your PHP backend for processing
            form.submit();
        }
    });
});

    </script>
</body>
</html>
