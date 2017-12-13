<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="SASS/Main.min.css">
    <title>You Shouldn't Be Here!</title>
</head>
<body>
    <div>
        <h1>You Shouldn't Be Here!</h1>
            <?php 
                if ($_SERVER['HTTP_HOST'] == gethostbyname($_SERVER['HTTP_HOST'])) {
                    echo "<h2 id='Error'>Direct IP access is forbidden</h2>";
                    echo "<section><h3>Just in case you were wondering...</h3><p>You are seeing this error message because you tried to access this web server directly using it's IP address.</p></section>";
                } else {
                    echo "<h2 id='Error'>Host '" . $_SERVER['HTTP_HOST'] . "' does not exist on this server</h2>";
                    echo "<section><h3>Just in case you were wondering...</h3><p>You are seeing this error message because you tried to access a host that does not exist on this server.</p></section>";
                }
            ?>
        <p id="info"><?php echo date("d/m/Y h:i:s A T"); ?> &bull; <?php echo date("e"); ?> &bull; Your IP <?php echo $_SERVER['REMOTE_ADDR']; ?> &bull; <a href="mailto:<?php echo $_SERVER['SERVER_ADMIN']; ?>">Email Server Admin</a></p>
    </div>
    <footer><?php echo $_SERVER['SERVER_SIGNATURE']; ?></footer>
</body>
</html>