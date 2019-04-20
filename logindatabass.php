<?php
$username = $_POST['first'];
$password = $_POST['pwd'];
$conn = mysqli_connect("localhost","root","","superdeseny")or die ("not found this databass");
if($username && $password){
    $select = "select * from users where username = '$username'";
    $found= mysqli_query($conn,$select);
    $count=mysqli_num_rows($found);
    if($count!=0){
        while($rows=mysqli_fetch_assoc($found)){
            if($rows['username']==$username){
                if($rows['passwordd']==$password){
                    echo "sucess";
                }
                else{
                    include "login.php";
                    echo "invalid password";
                }
            }
        }
    }
    else{
        include "login.php";
        echo "invalid username";
    }  
}
else{
    include "login.php";
    echo "invalid username or password";
}  
?>