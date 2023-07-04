<?php
// Your PHP code for reports goes here

// Example code to display a list of reports
$reports = [
    ['id' => 1, 'name' => 'Sales Report', 'date' => '2023-06-30'],
    ['id' => 2, 'name' => 'Customer Report', 'date' => '2023-06-30'],
    ['id' => 3, 'name' => 'Inventory Report', 'date' => '2023-06-30'],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Reports</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reports as $report): ?>
                <tr>
                    <td><?php echo $report['id']; ?></td>
                    <td><?php echo $report['name']; ?></td>
                    <td><?php echo $report['date']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
