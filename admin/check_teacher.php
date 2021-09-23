<?php

include('../includes/dbcon.php');
$usertype = 'teacher';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$course = $_POST['course'];
$phone = $_POST['contact'];
$email = $_POST['email'];
$username = $_POST['uname'];
$password = $_POST['password'];

if ($usertype == 'teacher'){
    $vPhone= "select contact from teacher where contact= '$phone' ";
    $phone_valid=mysqli_query($conn,$vPhone);
    $vEmail= "select email from teacher where email= '$email' ";
    $email_valid=mysqli_query($conn,$vEmail);
    if(mysqli_num_rows($phone_valid)>0){
       
        header("location: add_teacher.php?error='Phone'");
    }
    else if(mysqli_num_rows($email_valid)>0){
        header("location: add_teacher.php?error='Email'");
    } 
    else{

        $sql = "INSERT INTO teacher (fname, lname, courseName, contact, email, user_name, password) VALUES ('$fname', '$lname', '$course', '$phone', '$email', '$username', '$pwd')";
        $res = mysqli_query($conn, $sql);
    
        if (!$res) {
            die('Insertion failed!');
        } else {
    ?>
            <script>
                alert('Data inserted successfully.');
                window.open('list_teacher.php', '_self');
            </script>
    <?php
        }
    }
}
    ?>