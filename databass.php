<?php
$firstname = $_POST['first'];
$lastname = $_POST['last'];
$username = $_POST['uid'];
$email = $_POST['email'];
$password = $_POST['pwd'];
$confirmpassword = $_POST['conpwd'];
$conn = mysqli_connect("localhost","root","","superdeseny")or die ("not found this databass");
if($firstname && $lastname && $username && $email && $password && $confirmpassword){
    if($password == $confirmpassword){
        $select = "select * from users where username = '$username'";
        $found= mysqli_query($conn,$select);
        $count=mysqli_num_rows($found);
        if($count!=0){
            
            include ("signup.php");
            echo "Invalid Username";
        }
        else
        {
            $select = "select * from users where email = '$email'";
            $found= mysqli_query($conn,$select);
            $count=mysqli_num_rows($found);
            if($count!=0){
               
                include ("signup.php");
                echo "Invalid EMail";
            }
            else{
                mysqli_query($conn,"insert into users(firstname,lastname,username,email,passwordd,confirmpassword) 
                values('$firstname','$lastname','$username','$email','$password','$confirmpassword')");
                echo "sucess";
            }
        }
    }
    else{
        
        include ("signup.php");
        echo "Invalid Password Not Equal Confirm Password";
    }
}
else{
   
    include "signup.php";
    echo "Complete Data";
}
?>