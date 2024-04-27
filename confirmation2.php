<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
    <div class="container">
        <h1>Confirmation</h1>
        <p>
            <?php 
            if (isset($_GET['message'])) {
                echo htmlspecialchars(urldecode($_GET['message']));
            } else {
                echo "No information available.";
            }
            ?>
        </p>
        <a href="index.php">Return to Home</a>
    </div>
</body>
</html>
