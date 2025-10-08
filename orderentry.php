<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Entry</title>
    <style>
        body {
            font-family: monospace;
            background-color: #f0f8ff;
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            border: 2px solid #007bff;
            border-radius: 10px;
            background: #fff;
        }
        h2{
            text-align: center;
            font-size: 2em;
        }
        form{
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        label{
            font-size: 1.5em;
            font-weight: bold;
        }
        input{
            padding: 5px;
            margin-top: 5px;
        }
        button{
            background-color: #007bff;
            color: thistle;
            font-size: 1.2em;
            border: none;
            border-radius: 5px;
            height: 30px;
            margin-top: 10px;
        }
        button:hover{
            background-color: black;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="order-card">
        <h2>Order Entry</h2>
        <form action="processorder.php" method="post">
            <label>Customer Name: </label>
            <input type="text" name="customer-name" required/>
            <label>Email: </label>
            <input type="email" name="email" required/>
            <label>Quantity: </label>
            <input type="number" name="quantity" required/>
            <label>Product Name: </label>
            <input type="text" name="product-name" required/>
            <label>Delivery Notes: </label>
            <textarea name="delivery-notes" rows="5"></textarea>
            <button type="submit">Submit Order</button>
        </form>
    </div>
</body>
</html>