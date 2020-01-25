<div class="row">
    <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
        <h2>Update Operation in CRUD Application</h2>
        <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">First Name</label>
            <div class="col-sm-10">
                <input type="text" name="fname"  class="form-control" id="input1" placeholder="First Name" value="<?php echo $firstname;  ?>" />
            </div>
        </div>

        <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Last Name</label>
            <div class="col-sm-10">
                <input type="text" name="lname"  class="form-control" id="input1" placeholder="Last Name" value="<?php echo $lastname;  ?>" />
            </div>
        </div>

        <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">E-Mail</label>
            <div class="col-sm-10">
                <input type="email" name="email"  class="form-control" id="input1" placeholder="E-Mail" value="<?php echo $email;  ?>" />
            </div>
        </div>

        <div class="form-group" class="radio">
            <label for="input1" class="col-sm-2 control-label">Gender</label>
            <div class="col-sm-10">
                <label>
                    <input type="radio" name="gender" id="optionsRadios1" value="male" <?php if($gender == 'male'){ echo "checked"; } ?>> Male
                </label>
                <label>
                    <input type="radio" name="gender" id="optionsRadios1" value="female" <?php if($gender == 'female'){ echo "checked"; } ?>> Female
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Age</label>
            <div class="col-sm-10">
                <select name="age" class="form-control">
                    <option>Select Your Age</option>
                    <?php foreach ($ages as $givenage) { ?>
                    <option value="<?php echo $age; ?>" <?php if($givenage == $age){ echo "selected"; } ?>><?php echo $age; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
    </form>
</div>