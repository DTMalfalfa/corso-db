<br />
<br />
<h1>CorsoDB</h1>
<ul class="nav nav-tabs">
    <li class="active"><a href="#home" data-toggle="tab">Wall</a></li>
    <li><a href="#profile" data-toggle="tab">Profile</a></li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Menu <span class="caret"></span>
    </a>
        <ul class="dropdown-menu">
            <li><a href="#dropdown1" data-toggle="tab">Edit Profile</a></li>
            <li class="divider"></li>
            <li><a href="#dropdown2" data-toggle="tab">Account Settings</a></li>
        </ul>
    </li>
</ul>
<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active in" id="home">
            <?php include "corsodb_wall.php"; ?>
    </div>
    <div class="tab-pane fade" id="profile">
            <?php include "corsodb_profile.php"; ?>
    </div>
    <div class="tab-pane fade" id="dropdown1">
            <?php include "corsodb_editprofile.php"; ?>
    </div>
    <div class="tab-pane fade" id="dropdown2">
            <?php include "corsodb_accountsettings.php"; ?>
    </div>
</div>