<?php
    session_start();

    session_destroy();
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Loggin out...</title>
        <link rel="stylesheet" href="styles/logout.css">
        <link href="styles/logout.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class= "login-mid">
            <h1>Loggin out...</h1>
        </div>
    </body>

    <script>
        setTimeout(() => {
            window.location = "login.php";
        }, 800);

    </script>
    
</html>