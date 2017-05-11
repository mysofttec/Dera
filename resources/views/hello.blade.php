<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Signup</h1>
<form action="/pay1" method="POST">
    <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="pk_test_9xGaoVUqIRisC2uhXuq2vDQe"
            data-amount="700"
            data-name="Demo Site"
            data-description="monthly subscription"
            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
            data-locale="auto">
    </script>
</form>

</body>
</html>