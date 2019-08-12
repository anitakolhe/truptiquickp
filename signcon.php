<?php

 $servername="localhost";
 $username="root";
 $password="";
 $dbname="newq";
session_start();

 $db=mysqli_connect($servername,$username,$password,$dbname);
 if($db->connect_error)
 {
   die("connection failed:".$db);
 }
/* else
 {
 	echo"connected successfully";
 }*/

if(isset($_POST['Login'])){
		$Username=$_POST['user_name'];
	    $Password=$_POST['confirm_pass'];

        $result = mysqli_query($db,"SELECT user_name, confirm_pass,id FROM signup WHERE user_name = '$username'");

        $row = mysqli_fetch_array($result);
        $hashed_password=$row['confirm_pass'];
        
        if($row["user_name"]==$username && password_verify($password,$hashed_password)){
        

            $new_id=$row["id"];

            
            $_SESSION['id']=$new_id;
             
            $_SESSION['logged_user_name']=$username;
            //header('location:home_page.php');//rediect to index page after insertion
            header('Location: index.php');
        } 
		else {
            $_SESSION['msg']="Please enter valid user name and password";
            header('Location: sign_in.php');
		}
        }
        
        if(isset($_POST['cancel'])){
            header('location: index.php'); //redirect to home page 
        }

?>