<?php
include('includes/dbcon.php');
$usertype = $_POST['usertype'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$course = $_POST['course'];
$phone = $_POST['contact'];
$email = $_POST['email'];
$username = $_POST['uname'];
$password = $_POST['password'];

if ($usertype == 'student') {
    $vPhone= "select contact from student where contact= '$phone' ";
    $phone_valid=mysqli_query($conn,$vPhone);
    $vEmail= "select email from student where email= '$email' ";
    $email_valid=mysqli_query($conn,$vEmail);
    if(mysqli_num_rows($phone_valid)>0){
       
        header("location: login.php?error='phone'");
    }
    else if(mysqli_num_rows($email_valid)>0){
        header("location: login.php?error='email'");
    } 
    else{
        $sql = "INSERT INTO user_form (fname, lname, courseName, phone, email, username, password, user_type) VALUES('$fname', '$lname', '$course', '$phone', '$email', '$username', '$password', '$usertype')";
    
        $res = mysqli_query($conn, $sql);
        if (!$res) {
            // echo "failed";
            die('Signup failed!');
        } else {
        ?>
        <script>
            alert('Form submission successfully.\nYou can login to dashboard once admin approve your request.');
            window.open('login.php?', '_self');
        </script>
        <?php
        }
    }
}
else if ($usertype == 'teacher'){
    $vPhone= "select contact from teacher where contact= '$phone' ";
    $phone_valid=mysqli_query($conn,$vPhone);
    $vEmail= "select email from teacher where email= '$email' ";
    $email_valid=mysqli_query($conn,$vEmail);
    if(mysqli_num_rows($phone_valid)>0){
       
        header("location: login.php?error='phone'");
    }
    else if(mysqli_num_rows($email_valid)>0){
        header("location: login.php?error='email'");
    }
    else{
        $sql = "INSERT INTO user_form (fname, lname, courseName, phone, email, username, password, user_type) VALUES('$fname', '$lname', '$course', '$phone', '$email', '$username', '$password', '$usertype')";
    
        $res = mysqli_query($conn, $sql);
        if (!$res) {
            // echo "failed";
            die('Signup failed!');
        } else {
        ?>
        <script>
            alert('Form submission successfully.\nYou can login to dashboard once admin approve your request.');
            window.open('login.php?', '_self');
        </script>
        <?php
        }
    }
}

