<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="SASS/Main.min.css">
    <title>You Shouldn't Be Here!</title>
</head>
<body>
    <h1>You Shouldn't Be Here!</h1>
    <div>
        <hr>
            <p id="Error">
            <?php echo $_SERVER['HTTP_HOST'];
echo $_SERVER['SERVER_ADDR']; ?>
            </p>
        <hr>
        <p>Your IP <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
    </div>
</body>
</html>