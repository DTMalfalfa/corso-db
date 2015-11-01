<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="protected_page.php">CorsoDB</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="protected_page.php">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="friends.php">Friends</a></li>
                <li><a href="inbox.php">Messages</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">More... <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="photos.php">Photos</a></li>
                        <li><a href="videos.php">Videos</a></li>
                        <li><a href="music.php">Music</a></li>
                        <li class="divider"></li>
                        <li><a href="notes.php">Notes</a></li>
                        <li class="divider"></li>
                        <li><a href="storage.php">My Storage</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><img src="images/testuser1.png" width="45" height="45" class="statusPic" /></li>
                <li><a href="#">Welcome, <?php echo htmlentities($_SESSION['username']); ?></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Menu <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="profile-settings.php">Profile Settings</a></li>
                        <li><a href="account-settings.php">Account Settings</a></li>
                        <li><a href="help-and-support.php">Help &amp; Support</a></li>
                        <li><a href="activity-history.php">Activity History</a></li>
                        <li class="divider"></li>
                        <li><a href="admin-panel.php">Administrator's Panel</a></li>
                        <li class="divider"></li>
                        <li><a href="includes/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br />
<div class="container">
    <div class="col-md-3">
        <?php include "exampleContent/statusBox.php"; ?>
    </div>
    <div class="col-md-6"></div>
    <div class="col-md-3"></div>
</div>