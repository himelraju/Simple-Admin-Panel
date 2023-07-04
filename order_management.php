<?php
// Your PHP code for order management goes here

// Example code to display a list of orders
$orders = [
    ['id' => 1, 'customer' => 'John Doe', 'total' => 100.00],
    ['id' => 2, 'customer' => 'Jane Smith', 'total' => 50.00],
    ['id' => 3, 'customer' => 'Mike Johnson', 'total' => 75.00],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Order Management</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?php echo $order['id']; ?></td>
                    <td><?php echo $order['customer']; ?></td>
                    <td><?php echo $order['total']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
