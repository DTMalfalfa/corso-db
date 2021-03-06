<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CorsoDB</title>
        <script type="text/JavaScript" src="js/sha512.js"></script>
        <script type="text/JavaScript" src="js/forms.js"></script>
        <link href="css/theme/cyborg/bootstrap.min.css" rel="stylesheet">
        <link href="css/signin.css" rel="stylesheet">
        <link href="css/sticky-footer-navbar.css" rel="stylesheet">
        <link href="css/helpboxCSS-ns6.css" rel="stylesheet">
    </head>

    <!-- body !-->

    <body>
        <div class="container">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <?php
                    if (isset($_GET['error'])) {
                        echo '<p class="error">Error Logging In!</p>';
                    }
                ?>

                    <form action="includes/process_login.php" method="post" name="login_form" class="form-signin">
                        <h2><?php include "includes/config/sitename.php"  ?></h2> 
                        Email:
                        <input type="text" name="email" class="form-control" /> 
                        Password:
                        <input type="password" name="password" id="password" class="form-control" />
                        <input type="button" value="Login" onclick="formhash(this.form, this.form.password);" class="btn btn-primary" />
                    </form>

                    <?php
        if (login_check($mysqli) == true) {
                        echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
 
            echo '<p>Do you want to change user? <a href="includes/logout.php">Log out</a>.</p>';
        } else {
                        echo '<p>Currently logged ' . $logged . '.</p>';
                        echo "<p>If you don't have a login, please <a href='register.php'>register</a></p>";
                }
?>
            </div>
            <div class="col-md-3">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h3>Need some help?</h3>
                        <p>
                            <a href="#">Register for <?php include "includes/config/sitename.php"; ?></a><br />
                            <a href="#">Fogotten Password</a><br />
                            <a href="#"><?php include "includes/config/sitename.php"; ?> Support</a><br />
                            <br />
                        </p>
                    </div>
                </div>
                
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h3>Share <?php include "includes/config/sitename.php"; ?></h3>
                <!-- TODO: Add official social media buttons. Users can optionally do this on their own installations - due to the nature of the button configuration tools, adding the buttons now would only link every app's links redirect to the CorsoDB sites. !-->
                <p>
                    <a href="#">Facebook</a><br />
                    <a href="#">Twitter</a><br />
                    <a href="#">Tumblr</a><br />
                    <a href="#">Reddit</a><br />
                    <a href="#">Ello</a><br />
                    <a href="#">Pinterest</a><br />
                </p>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include "includes/footer.inc.php";
            include "js/plugins.php";
        ?>
    </body>

    </html>