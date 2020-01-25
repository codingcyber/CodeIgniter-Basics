<div class="row">
    <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
        <h2>Update Operation in CRUD Application <?php echo $id; ?></h2>
        <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">First Name</label>
            <div class="col-sm-10">
                <input type="text" name="fname"  class="form-control" id="input1" placeholder="First Name" />
            </div>
        </div>

        <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Last Name</label>
            <div class="col-sm-10">
                <input type="text" name="lname"  class="form-control" id="input1" placeholder="Last Name" />
            </div>
        </div>

        <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">E-Mail</label>
            <div class="col-sm-10">
                <input type="email" name="email"  class="form-control" id="input1" placeholder="E-Mail" />
            </div>
        </div>

        <div class="form-group" class="radio">
            <label for="input1" class="col-sm-2 control-label">Gender</label>
            <div class="col-sm-10">
                <label>
                    <input type="radio" name="gender" id="optionsRadios1" value="male" checked> Male
                </label>
                <label>
                    <input type="radio" name="gender" id="optionsRadios1" value="female"> Female
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">Age</label>
            <div class="col-sm-10">
                <select name="age" class="form-control">
                    <option>Select Your Age</option>
                    <option value="20">20</option>
                </select>
            </div>
        </div>
        <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
    </form>
</div>