<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>IT SourceCode</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  </head>
  <center>
  <h1>User Log In</h1>
<div class="input-field">
        <h3>Please Fill-out All Fields</h3>
        <form method="post" action="" >
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="user" style="width:20em;" placeholder="Enter your Username"  />
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="pass" style="width:20em;" placeholder="Enter your Password"  />
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary submitBtn" style="width:20em; margin:0;" /><br><br>
            
             <a href="register.php">register</a>
     
          </div>
          
        </form>
      </div>
      </center>
      </html>
      <?php

 // print_r($datet["year"]);

     // echo $fi;
      
        session_start();
       
        include_once 'dbconfig.php';
        include_once 'operation.php';

        $Database=new Database();
        $Db=$Database->getConnection();
       
        $Op=new Operations($Db);

        if(isset($_POST["submit"])){


            $dd=$Op->Login($_POST["user"],$_POST["pass"]);
         if($dd>0){

            $_SESSION["id"]=$dd["user_id"];

        
            ?>
     <script>
      alert('Successfully Log In');
      document.location='profile.php'
    </script> 
    <?php

         }

        }

        








//       session_start();
//       include 'connection.php';
// if(isset($_POST['submit'])){
//   $user = $_POST['user'];
//   $pass = $_POST['pass'];
//   $query=mysqli_query($db,"SELECT * FROM users WHERE username = '$user' AND password = '$pass'");
//   $num_rows=mysqli_num_rows($query);
//   $row=mysqli_fetch_array($query);
//   $_SESSION["id"]=$row['user_id'];
// if ($num_rows>0)
// {
    ?>
    <!-- <script>
      alert('Successfully Log In');
      document.location='profile.php'
    </script> -->
    <?php
// }
// }
      ?>