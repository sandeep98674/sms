<?php

include('../includes/dbcon.php');
$usertype = 'student';
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
       
        header("location: add_student.php?error='Phone'");
    }
    else if(mysqli_num_rows($email_valid)>0){
        header("location: add_student.php?error='Email'");

    } 
    else{

        $sql = "INSERT INTO student (fname, lname, contact, email, courseName, user_name, password) VALUES ('$fname', '$lname', '$phone', '$email', '$course', '$username', '$pwd')";
        $res = mysqli_query($conn, $sql);
        if (!$res) {
            die('Insertion failed!');
        } else {
        ?>
            <script>
                alert('Data inserted successfully.');
                window.open('list_student.php', '_self');
            </script>
         <?php
        }
    }   



    }


?>