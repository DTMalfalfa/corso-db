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
        <link href="css/theme/yeti/bootstrap.min.css" rel="stylesheet">
        <link href="css/signin.css" rel="stylesheet">
        <link href="css/socialCSS_ns3.css" rel="stylesheet">
    </head>

    <body>
        <?php if (login_check($mysqli) == true) : ?>
            <?php include "includes/navbar.php"; ?>
                <div class="container fixed">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <br />
                        <br />
                        <br />
                        <!-- add your protected content here! -->
                        <!-- here's some example content !-->
                        <ul class="breadcrumb">
                            <li><a href="#"><?php include "includes/config/sitename.php"; ?></a></li>
                            <li><a href="#">Home</a></li>
                            <li class="active">Member's only page</li>
                        </ul>
                            <img src="images/logo_banner.png" width="375" height="150">
                            <p>
                                Welcome to CorsoDB - the Bootstrap and PHP based Website and Application Framework :)<br />
                                CorsoDB has many great features to get your website or app started quickly and easily - you can be sure                                   you have the best of the best with features such as:<br />
                                <ul>
                                    <li>Pre-built PHP and Bootstrap-based website</li>
                                    <li>SQL Database Dump with tables pre-written</li>
                                    <li>Register/Login PHP System</li>
                                    <li>SHA-512 based encryption for user passwords in CorsoDB database</li>
                                    <li>Brute-force protection system based on SQL and PHP Security</li>
                                    <li>All available themes from <a href="https://bootswatch.com">Bootswatch.com</a></li>
                                </ul>
                            <br />
                            ... and much more!<br />
                            <br />
                            CorsoDB Web App Framework is constantly updated with new features and fixes both from the developer AND the community - that's right, CorsoDB is on <a href="https://corsodb-webapp.sourceforge.net">SourceForge</a>! This means that developers like you can receive optional updates quickly and easily, and when you find bugs or fixes to be made, you can contribute them to CorsoDB!<br />
                        <br />
                        
                            </p>
                        
                        <!-- thanks! Now you have a go! :) !-->
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <?php include "includes/footer.inc.php"; ?>
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