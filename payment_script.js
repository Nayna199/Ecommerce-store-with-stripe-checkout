var stripe = Stripe('pk_test_51OApbbDAcRPDvKyQH4DEPZpWuC74wLWUOCrS2rWMWnqzgKNXLTzWRL7p3brGgYwEyDTyID7xNCaTpO0GeBGtoEdw00jVcqn3ba');
var elements = stripe.elements();
var cardElement = elements.create('card');

cardElement.mount('#card-element');

var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
    event.preventDefault();

    stripe.createToken(cardElement).then(function(result) {
        if (result.error) {
            // Inform the user if there will be an error.
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
        } else {
            var token = result.token;
            
            // Create a hidden input to store the token
            var tokenInput = document.createElement('input');
            tokenInput.setAttribute('type', 'hidden');
            tokenInput.setAttribute('name', 'stripeToken');
            tokenInput.setAttribute('value', token.id);
            form.appendChild(tokenInput);
            
            // Submit the form to your server
            form.submit();
        }
    });
});
