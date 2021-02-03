<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>IT SourceCode</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  </head>
  <?php
   session_start();
    $id=$_SESSION['id'];
   include 'dbconfig.php';
   include 'operation.php';

   $Database=new Database();
   $Db=$Database->getConnection();

   $Op=new Operations($Db);
   $data=$Op->showData($id);

//    print_r($data);
//    echo $data['username'];


  ?>

  <center>
  <h1>User Profile</h1>
<div class="profile-input-field">
        <h3>Please Fill-out All Fields</h3>
        <form method="post" action="" >
          <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="fname" style="width:20em;" placeholder="Enter your Fullname" value="<?php echo $data['first_name']; ?>" required />
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="lname" style="width:20em;" placeholder="Enter your Fullname" value="<?php echo $data['last_name']; ?>" required />
          </div>
          <div class="form-group">
            <label>Gender</label>
            <input type="text" class="form-control" name="gender" style="width:20em;" placeholder="Enter your Gender" required value="<?php echo $data['gender']; ?>" />
          </div>
          <div class="form-group">
            <label>Date of Birth</label>
            <input type="text" class="form-control" name="age" style="width:20em;" placeholder="Enter your Age" value="<?php echo $data['date_of_birth']; ?>">
          </div>
        
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" style="width:20em; margin:0;"><br><br>
        
             <a href="logout.php">Log out</a>
           
          </div>
        </form>
      </div>
      </center>
      </html>
      <?php

if(isset($_POST['submit'])){

    $Op->updateData($_POST['fname'],$_POST['lname'],$_POST['gender'],$_POST['age'],$id);
}





     
    //   if(isset($_POST['submit'])){
    //     $fullname = $_POST['fname'];
    //     $gender = $_POST['gender'];
    //     $age = $_POST['age'];
    //     $address = $_POST['address'];
    //   $query = "UPDATE users SET full_name = '$fullname',
    //                   gender = '$gender', age = $age, address = '$address'
    //                   WHERE user_id = '$id'";
    //                 $result = mysqli_query($db, $query) or die(mysqli_error($db));
                    ?>
                     <!-- <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "index.php";
        </script> -->
        <?php
                        
?>