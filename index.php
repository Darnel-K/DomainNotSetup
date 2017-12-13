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
            <h2 id="Error">
            <?php 
                if ($_SERVER['HTTP_HOST'] == gethostbyname($_SERVER['HTTP_HOST'])) {
                    echo "Direct IP access is forbidden";
                } else {
                    echo "Host '" . $_SERVER['HTTP_HOST'] . "' does not exist on this server";
                }
            ?>
            </h2>
            <p><?php echo date("d/m/Y h:i:s A T");?></p>
        <hr>
        <p><?php echo $_SERVER['REQUEST_TIME']; ?> &bull; Your IP <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
    </div>
    <footer><?php echo $_SERVER['SERVER_SIGNATURE']; ?></footer>
</body>
</html>