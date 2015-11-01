<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CorsoDB</title>
        <link href="css/theme/cyborg/bootstrap.min.css" rel="stylesheet">
        <link href="css/signin.css" rel="stylesheet">
        <link href="css/socialpak-ns.css" rel="stylesheet">
    </head>

    <body>
        <?php if (login_check($mysqli) == true) : ?>
            <?php include "includes/navbar.php"; ?>
                <div class="container">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <?php include "exampleContent/wallContent.php"; ?>
                    </div>
                    <div class="col-md-3"></div>
                    <?php else : ?>
                        <div class="container">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <h2>UNAUTHORIZED ACCESS ATTEMPT!</h2>
                                <p>
                                    You are not authorized to access this page without <a href="register.php">registering for an account</a> first!
                                    <br />
                                </p>
                                <small>This access attempt has been logged by our servers. Further attempts to access our servers without <a href="index.php">logging in</a> will result in anti-access actions being taken.</small>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <?php endif; ?>
    </body>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    </html>