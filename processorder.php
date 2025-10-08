<?php

$customer_name = filter_input(INPUT_POST, 'customer-name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$quantity = filter_input(INPUT_POST, 'quantity', FILTER_VALIDATE_INT);
$product_name = filter_input(INPUT_POST, 'product-name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$notes = filter_input(INPUT_POST, 'delivery-notes', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$error = "";

if($quantity == false || $quantity < 1){
    $error = "Invalid quantity.";
}
elseif ($email == false) {
    $error = "Invalid email address.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">`
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Order</title>
    <style>
        body {
            font-family: monospace;
            background-color: #f0f8ff;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 2px solid #007bff;
            border-radius: 10px;
            background: #fff;
        }
    </style>
</head>
<body>
    <div>
        <h2><Strong>Order Summary</Strong></h2>
        <hr>
        <?php 
        if($error):
        ?>
        <p class="error"> <?php echo htmlspecialchars($error); ?></p>
        <a href="orderentry.php">Go Back</a>
        <?php else: ?>
            <div class="summary">
                <p><strong>Customer Name: </strong> <?php echo htmlspecialchars($customer_name); ?></p>
                <p><strong>Email Address: </strong> <?php echo htmlspecialchars($email); ?></p>
                <p><strong>Quantity: </strong> <?php echo htmlspecialchars($quantity); ?></p>
                <p><strong>Product Name: </strong> <?php echo htmlspecialchars($product_name); ?></p>
                <p><strong>Delivery Notes: </strong> <?php echo htmlspecialchars($notes); ?></p>
                <hr>
                <p><strong>Total Order Status: Order Accepted and Processed Successfully!</strong></p>
            </div>
            <a href="orderentry.php">Place Another Order</a> 
        <?php endif; ?>
    </div>
</body>
</html>