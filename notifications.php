<?php
// Your PHP code for notifications goes here

// Example code to display a list of notifications
$notifications = [
    ['id' => 1, 'message' => 'New order placed', 'date' => '2023-07-01'],
    ['id' => 2, 'message' => 'Payment received', 'date' => '2023-06-30'],
    ['id' => 3, 'message' => 'Product out of stock', 'date' => '2023-06-29'],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Notifications</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($notifications as $notification): ?>
                <tr>
                    <td><?php echo $notification['id']; ?></td>
                    <td><?php echo $notification['message']; ?></td>
                    <td><?php echo $notification['date']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
