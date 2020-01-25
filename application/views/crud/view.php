<div class="row">
    <h2>Read Operation in CRUD applicaiton</h2>
    <table class="table "> 
        <thead> 
            <tr> 
                <th>#</th> 
                <th>Full Name</th> 
                <th>E-Mail</th> 
                <th>Age</th> 
                <th>Gender</th> 
                <th>Extras</th>
            </tr> 
        </thead> 
        <tbody> 
            <?php foreach ($users as $user) {  ?>
            <tr> 
                <th scope="row">1</th> 
                <td><?php echo $user['firstname'] . " " . $user['lastname']; ?></td> 
                <td><?php echo $user['email']; ?></td> 
                <td><?php echo $user['gender']; ?></td> 
                <td><?php echo $user['age']; ?></td> 
                <td>
                    <a href="update.php?id=#"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                    <a href="delete.php?#" class="btn btn-info btn-xs" >Delete</a>

                </td>
            </tr> 
            <?php } ?>
        </tbody> 
    </table>
</div>