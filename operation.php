<?php


class Operations{

    private $conn;
    
    public function __construct($db){

        $this->conn=$db;

    }

    public function Register($username,$email,$password){


         $sql0="SELECT * From users where username='$username' and email='$email'";
        $result0=mysqli_query($this->conn,$sql0);
        if(mysqli_num_rows($result0)>0){
             
            echo 'already available';
            
            $this->Log($username." try to register");
            die();

        }

        else{
            $cdate=date('Y-m-d H:i:s');
             echo $sql= "INSERT INTO users (username,email,password,create_date) Values('".$username."','".$email."','".md5($password)."','$cdate')";
           
             $result=mysqli_query($this->conn,$sql) or die ('Error in updating Database');
           
            $this->Log($username." registered");
        }
    
    
    }

    public function Login($username,$password){
        $p=md5($password);

        echo $sql="SELECT * FROM users WHERE username='$username' and password='$p'";
        
        $result=mysqli_query($this->conn,$sql);
        $data=mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result)==1){
        

            $this->Log($username." Login");

            return $data;
        }
        else{
            echo 'error';
        }

       


    }



    public function showData($id){

        $sql="SELECT * FROM users WHERE user_id=$id";
        $result=mysqli_query($this->conn,$sql);
        $data=mysqli_fetch_assoc($result);
        return $data;

    }



    public function updateData($fname,$lname,$gender,$dateOfBirth,$id){

         $sql="UPDATE  users set first_name='$fname',last_name='$lname',gender='$gender',date_of_birth='$dateOfBirth' where user_id=$id";
        $result=mysqli_query($this->conn,$sql);

        
        $this->Log($id." Updated");

    }


    public function Log($data){

        
        $datet=getdate();
      
        $fi="Date : ".$datet["mday"] .'-'.$datet["mon"] .'-'.$datet["year"] .'# Time GMT'.$datet["hours"].'-'.$datet["minutes"].'-'.$datet["seconds"];
    
        $f=fopen("Log.txt","a")or die("Unable to open file!");
        fwrite($f,$fi."\n");
        fwrite($f,$data."\n");
        fclose($f);

    }


}


?>