<?php 

    session_start();

    //incluse database connection  value
    
     $servername="localhost";
     $username="root";
     $password="";
     $dbname="newq";

   $db=mysqli_connect($servername,$username,$password,$dbname);

    //check connection 
    if($db->connect_error){
        die("connection failed:".$db);
    }
    /*else{
        echo"connected";
    }*/
   
    ///insert data into table
    if(isset($_POST['submit'])&&($_POST['password']===$_POST['confirm_pass'])){
         //varible initialization
        $user_name=$_POST['Username'];
        $user_mail_id=$_POST['email'];
        $confirm_pass=$_POST['confirm_pass'];
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        

        //echo"DONE";
        $query="INSERT INTO signup(username,email,confirm_pass,first_name,last_name) VALUES('$Username','$email','$hash_pass','$first_name','$last_name')";
        mysqli_query($db,$query);
        //$_SESSION['msg']="Done sucessfully";
        header('location:sign_in.php');//rediect to index page after insertion

    }
    if(isset($_POST['submit'])&&($_POST['password']!=$_POST['confirm_pass'])){
        header('location:signup.php');
    }
?>