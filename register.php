<html lang="en-US">
  <head>
  <title>IT SourceCode</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  </head>
  <center>
  <h1>Register New User</h1>
<div class="reg-input-field">
        <h3>Please Fill-out All Fields</h3>
        <form method="post" action="" >
          <div class="form-group">
            <label>UserName</label>
            <input type="text" class="form-control" name="username" style="width:20em;" placeholder="Enter your UserName"  />
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" style="width:20em;" placeholder="Enter your Email"  />
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="password" style="width:20em;" placeholder="Enter your Password">
          </div>
        
        
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary submitBtn" style="width:20em; margin:0;" /><br><br>
             
             <a href="index.php">LogIn</a>
           
          </div>
        </form>
      </div>
      </center>
      </html>
      <?php
      
       
        include_once 'dbconfig.php';
        include_once 'operation.php';
        $Database=new Database();

        $Db=$Database->getConnection();
        $Op=new Operations($Db);

       if(isset($_POST["submit"])){
       
        $Op->Register($_POST["username"],$_POST["email"],$_POST["password"]);
        ?>
        <!-- <script type="text/javascript">
    alert("Successfull Added.");
    window.location = "index.php";
</script> -->
        <?php
}
?> 





