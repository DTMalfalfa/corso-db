<div class="socialContainer">
    <div class="socialLeft">
        <img class="img-thumbnail" alt="CorsoDB User Profile Image" style="width: 200px; height: 250px;" src="images/user_profile.png" data-holder-rendered="true" float="left">
    </div>
    <div class="socialRight">
        <h1><?php echo htmlentities($_SESSION['username']); ?></h1>
        <small>Age, Location, Username</small>
        <br />
        <br />
        <p class="socialBio">
            So this is where a small user auto-biography would be placed - this frame is displayed as the "profile" tab in this demonstration of CorsoDB's abilities in adaptation and project suitability. The user can write about 500 characters or 2 small paragraphs for their biographies, as the rest of their profile information needs space to be displayed, too.
        </p>
        <br />
        <h4>More of <?php echo htmlentities($_SESSION['username']); ?>'s Profile</h4>
        <a href="#" class="btn btn-primary">Photos</a>
        <a href="#" class="btn btn-info">Likes</a>
        <a href="#" class="btn btn-success">Groups</a>
    </div>
</div>