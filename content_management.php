<?php
// Your PHP code for content management goes here

// Example code to display a list of pages
$pages = [
    ['id' => 1, 'title' => 'Home', 'content' => 'Welcome to our website.'],
    ['id' => 2, 'title' => 'About Us', 'content' => 'Learn more about our company.'],
    ['id' => 3, 'title' => 'Contact', 'content' => 'Get in touch with us.'],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Content Management</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pages as $page): ?>
                <tr>
                    <td><?php echo $page['id']; ?></td>
                    <td><?php echo $page['title']; ?></td>
                    <td><?php echo $page['content']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
