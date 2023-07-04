<?php
// Your PHP code for promotions goes here

// Example code to display a list of promotions
$promotions = [
    ['id' => 1, 'name' => 'Summer Sale', 'discount' => '20% off'],
    ['id' => 2, 'name' => 'Holiday Special', 'discount' => '10% off'],
    ['id' => 3, 'name' => 'Clearance Sale', 'discount' => '50% off'],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Promotions</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Discount</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($promotions as $promotion): ?>
                <tr>
                    <td><?php echo $promotion['id']; ?></td>
                    <td><?php echo $promotion['name']; ?></td>
                    <td><?php echo $promotion['discount']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
