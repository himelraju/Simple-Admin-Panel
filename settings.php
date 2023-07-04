<?php
// Your PHP code for settings goes here

// Example code to display system settings
$settings = [
    ['name' => 'Site Title', 'value' => 'My Website'],
    ['name' => 'Logo', 'value' => 'logo.png'],
    ['name' => 'Max File Size', 'value' => '10MB'],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Settings</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($settings as $setting): ?>
                <tr>
                    <td><?php echo $setting['name']; ?></td>
                    <td><?php echo $setting['value']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
