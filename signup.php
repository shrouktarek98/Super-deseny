<?php 

 include_once "navbar.php";
 //include ('navbar.php');
?>


<section class="signup-form">

    <div class="img">
        <h1>Sign Up</h1>

        <form action="databass.php" method="POST">
            <input type="text" name="first" placeholder="First Name">

            <input type="text" name="last" placeholder="last Name">

            <input type="email" name="email" placeholder="@yahoo.com">

            <input type="text" name="uid" placeholder="user Name">

            <input type="Password" name="pwd" placeholder="Password">

            <input type="Password" name="conpwd" placeholder="Confirm Password">

            <button type="submit" name="submit" class="btn btn-warning">Sign Up</button>
        </form>
    </div>
</section>
        






<div class="clr"></div>
</section>

<?php 
 include_once "footer.php"
//include ('footer.php');
 ?>