<?php
$error = filter_input(INPUT_GET, 'err', $filter = FILTER_SANITIZE_STRING);
 
if (! $error) {
    $error = 'Oops! An unknown error happened.';
}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Error</title>
        <link href="css/theme/yeti/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <h1>There was a problem</h1>
        <p class="error">
            <?php echo $error; ?>
        </p>
        <?php include "includes/footer.inc.php"; ?>
    </body>

    </html>