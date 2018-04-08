<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/Main.min.css">
    <link rel="stylesheet" href="CSS/Dark.min.css">
    <title>You Shouldn't Be Here!</title>
</head>
<body>
    <?php
        $date = date("d/m/Y h:i:s A T");
        $region = date("e");
        $userIP = $_SERVER['REMOTE_ADDR'];
        $admin = $_SERVER['SERVER_ADMIN'];
        $signature = $_SERVER['SERVER_SIGNATURE'];
    ?>
    <div id="Container">
        <div class="swing">
            <h1>You Shouldn't Be Here!</h1>
                <?php 
                    if ($_SERVER['HTTP_HOST'] == gethostbyname($_SERVER['HTTP_HOST'])) {
                        http_response_code(403);
                        echo "<h2 id='Error'>Direct IP access is forbidden</h2>";
                        echo "<section><h3>Just in case you were wondering...</h3><p>You are seeing this error message because you tried to access this web server directly using it's IP address.<br><br>If you think this is a server error, please contact the server admin using the link below.</p></section>";
                    } else {
                        http_response_code(404);
                        echo "<h2 id='Error'>Host '" . $_SERVER['HTTP_HOST'] . "' is non-existent</h2>";
                        echo "<section><h3>Just in case you were wondering...</h3><p>You are seeing this error message because you tried to access a host that does not exist on this server.<br><br>If you think this is a server error, please contact the server admin using the link below.</p></section>";
                    }
                ?>
            <p id="info"><?php echo $date; ?> &bull; <?php echo $region; ?> &bull; Your IP <?php echo $userIP; ?> &bull; <a href="mailto:<?php echo $admin; ?>">Contact Server Admin</a></p>
        </div>
    </div>
    <footer><?php echo $signature; ?><p id='Copyright'>Copyright &copy; <?php echo date('Y'); ?> Darnel-K</p></footer>
</body>
</html>