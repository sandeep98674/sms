<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
                <a href="student.php">Back</a>
            </div><!-- /.col -->
            <div class="col-sm-4 text-center">
                <h3><strong>WELCOME ADMIN</strong></h3>
            </div>
            <div class="col-sm-4">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Student</li>
                </ol>
            </div><!-- /.col -->
            <hr>
            <h1 class="m-0 text-dark">Update Student</h1>
        </div><!-- /.row -->
    </div>
</div>

<div class="container pb-5 mb-5">
<?php
include('../includes/dbcon.php');
$id = $_GET['id'];
$sql = "select * from student where id = '$id'";
$res = mysqli_query($conn, $sql);
if(!$res){
    die("failed to update");
}
else{
    $row = mysqli_fetch_assoc($res);
    $course = $row['courseName'];
?>

<form  method="POST" onsubmit="return validation()">
                    <div class="md-form form-group">
                    <select class="form-control" name="usertype" required>
                        <option selected hidden disabled>Select User</option>
                     
                    </select> 
                    </div>
                    <div class="md-form form-group">
                        <input type="text" name="fname" class="form-control" placeholder="First Name" id ="fname" required>
                        <span id="a" class="text-danger font weight-bold"></span>
                    </div>
                    <div class="md-form form-group">
                        <input type="text" name="lname" class="form-control" placeholder="Last Name" id ="lname" required>
                        <span id="b" class="text-danger font weight-bold"></span>
                    </div>
                    <div class="md-form form-group">
                    <select class="form-control" id="courseTitle" name="course">
                        <option selected hidden disabled>Select Faculty</option>
                        <option>Bsc.CSIT</option>
                        <option>BCA</option>
                        <option>BIM</option>
                        <option>BBS</option>
                    </select> 
                    </div>
                    <div class="md-form form-group">
                        <input type="text" name="contact" class="form-control" placeholder="Phone No." id ="contact" required>
                        <span id="c"class="text-danger font weight-bold"></span>
                    </div>
                    
                    <div class="md-form form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email Address" id ="email"required>
                        <span id="d"class="text-danger font weight-bold"></span>
                    </div>
                   
                    <div class="md-form form-group">
                        <input type="text" name="uname" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="md-form form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                   
                    <div class="md-form from-group">
                        <button type="submit" class="btn btn-primary" name="signup_student">Submit</button>
                    </div>
                  
                </form>
                
<?php } ?>
</div>

<?php include('footer.php'); ?>

<?php
if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $rollno = $_POST['rollno'];
    $courseName = $_POST['course'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $pwd = $_POST['password'];

    $sql = "update student set rollno='$rollno', fname='$fname', lname='$lname', contact='$phone', email='$email', courseName='$courseName', user_name='$uname', password='$pwd' where id='$id' ";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        die('Updation failed!');
    } else {
?>
        <script>
            alert('Data updated successfully.');
            window.open('list_student.php?', '_self');
        </script>
<?php
    }
}
?>
<script>
function validation(){

var first_name =document.getElementById("fname").value;

if(first_name.length <3){
  document.getElementById("a").innerHTML ="***name should be more then 2 "
  return false;
}
var correct =/^[A-Za-z]+$/;
if(first_name.match(correct)){
  true;
}
else{
  document.getElementById("a").innerHTML ="***name should be  charcter only"
  return false;
}

var last_name =document.getElementById("lname").value;

if(last_name.length <3){
  document.getElementById("b").innerHTML ="***name should be more then 2 "
  return false;
}
if(last_name.match(correct)){
  true;
}
else{
  document.getElementById("b").innerHTML ="***name should be  charcter only"
  return false;
}

var phone =document.getElementById("contact").value;

if(phone.length !=10){
  document.getElementById("c").innerHTML ="**number should be 10 "
  return false;
}
if(isNaN(phone)){
  document.getElementById("c").innerHTML ="***only number  are allowed"
  return false;
}

var vemail=document.getElementById("email").value;
if(vemail.indexOf("@")<=0){
  document.getElementById("d").innerHTML ="***position of @ in not valid "
  return false;
}
if((vemail.charAt(vemail.length-4)!=".")&&(vemail.charAt(vemail.length-3)!=".")){
  document.getElementById("d").innerHTML ="***position of . in not valid "
  return false;
}
}
</script>
