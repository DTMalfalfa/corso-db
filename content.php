<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <title>Home | NSPortal</title>
    <link href="core/css/bootstrap.min.css" rel="stylesheet">
    <link href="core/css/jumbotron.css" rel="stylesheet">
    <script src="core/js/ie-emulation-modes-warning.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://getbootstrap.com/examples/jumbotron/#">
                    <?php include "core/config/sitename.php"; ?>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container">
            <h1>Welcome to <?php include "core/config/sitename.php"; ?></h1>
            <p>The home of the best free Proxy, VPN, File sharing and coding network online!</p>
            <p><a class="btn btn-primary btn-lg" href="http://getbootstrap.com/examples/jumbotron/#" role="button">Learn more »</a></p>
        </div>
    </div>

    <div class="container">
        <!-- notification of server status !-->
        <?php include "core/config/vpnstatus.php"; ?>
            <!-- end notification of server status !-->

            <!-- custom component 1 !-->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Free public servers</h3>
                </div>
                <div class="panel-body">
                    Hi there!
                    <br />
                    <br /> Thanks for checking out our website and services! We know that a lot of users (including ourselves) like to test a product before we buy it (we're all very money-savvy) - so just below, we've detailed the connection information for a free VPN server that we host - you can use it as much as you want, for <b>FREE</b>! There are some limitations, however - we can't let the free VPN connect to app stores, music stores or torrent sites or trackers, but you can use it for everyday browsing and security.
                    <br />
                    <br />
                    <b>Server Address: </b> http://nsv.pn/public/
                    <br />
                    <b>Server Password: </b> i489Gkj12
                    <br />
                    <br /> Have Fun! :)
                </div>
            </div>
            <!-- end of custom component 1 !-->

            <div class="row">
                <div class="col-md-4">
                    <h2>Proxy Services</h2>
                    <p>We host free internet proxies for users to route their traffic through if a site is blocked. Our proxies will work on most of today's modern systems. </p>
                    <p><a class="btn btn-default" href="http://getbootstrap.com/examples/jumbotron/#" role="button">Join our proxy</a></p>
                </div>
                <div class="col-md-4">
                    <h2>File Sharing</h2>
                    <p>We have several methods of providing free and highly encrypted file sharing between our members - check them out in the member's section!</p>
                    <p><a class="btn btn-default" href="http://getbootstrap.com/examples/jumbotron/#" role="button">Join our FSN</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Coding Network</h2>
                    <p>We also host a coding network - a server where any of our members can contribute free and open-sourced code to a community of fellow programmers. We also love GitHub!</p>
                    <p><a class="btn btn-default" href="http://getbootstrap.com/examples/jumbotron/#" role="button">Join our CNS</a></p>
                </div>
            </div>



            <hr>

            <footer>
                <p>© NSTechnologies 2015</p>
            </footer>
    </div>

    <script src="core/js/jquery.min.js"></script>
    <script src="core/js//bootstrap.min.js"></script>
    <script src="core/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>