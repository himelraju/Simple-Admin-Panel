<?php
// Your PHP code for analytics goes here

// Example code to display analytics data
$visits = 500;
$users = 250;
$bounceRate = 60.5;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytics</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Analytics</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Visits</h5>
                <p class="card-text"><?php echo $visits; ?></p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Users</h5>
                <p class="card-text"><?php echo $users; ?></p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Bounce Rate</h5>
                <p class="card-text"><?php echo $bounceRate; ?>%</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
