<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo $id;
}
?>

<div class="modal-header">
    <h3 class="">Signup Form</h3>
    <button class="close" type="button" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
    <form action="signup_details.php" method="POST">

        <div class="md-form form-group">
            <input type="text" name="fname" class="form-control" placeholder="First Name" required>
        </div>
        <div class="md-form form-group">
            <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
        </div>
        <div class="md-form form-group">
            <input type="text" name="contact" class="form-control" placeholder="Phone No." required>
        </div>

        <?php if ($id == 3) { ?>
            <div class="md-form form-group">
                <input type="text" name="standard" class="form-control" placeholder="standard" required>
            </div>
            <div class="md-form form-group">
                <input type="text" name="rollno" class="form-control" placeholder="Roll No." required>
            </div>
        <?php } ?>

        <div class="md-form form-group">
            <input type="text" name="uname" class="form-control" placeholder="Username" required>
        </div>
        <div class="md-form form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
    </form>
</div>
<div class="modal-footer">
    <button class="btn btn-success" data-dismiss="modal" name="signup">Submit</button>
</div>