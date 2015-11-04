<br />
<form class="form-horizontal">
    <fieldset>
        <legend>Edit Profile</legend>
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Make my profile publicly visible (<a href="#">Our Privacy Terms</a>)
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="textArea" class="col-lg-2 control-label">Bio (5000 characters max.)</label>
            <div class="col-lg-10">
                <textarea class="form-control" rows="3" id="textArea"></textarea>
                <span class="help-block">If the checkbox above is checked, your username and biography, as well as profile picture will be publicly searchable and available (as detailed in <a href="#">Our Privacy Terms</a>)</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label">Notifications</label>
            <div class="col-lg-10">
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""> Email me whenever I get a notification (and I'm not online)
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Don't email me - I'm online all the time!
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="select" class="col-lg-2 control-label">Site Theme</label>
            <div class="col-lg-10">
                <select class="form-control" id="select">
                    <option>Cerulean</option>
                    <option>Cosmo</option>
                    <option>Cyborg</option>
                    <option>Darkly</option>
                    <option>Flatly</option>
                    <option>Journal</option>
                    <option>Lumen</option>
                    <option>Paper</option>
                    <option>Readable</option>
                    <option>Sandstone</option>
                    <option>Simplex</option>
                    <option>Slate</option>
                    <option>Spacelab</option>
                    <option>Superhero</option>
                    <option>United</option>
                    <option>Yeti</option>
                </select>
                <br />
                <small><i>NOTE: Not all themes will suit the site/app on all devices or screens.</i></small>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </fieldset>
</form>