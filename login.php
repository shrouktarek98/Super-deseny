
<?php 
 include_once "navbar.php";
 
 ?>


  <section class="login-form">
    <div class="cover">
      <h1>Log In</h1>

      <form  action="logindatabass.php" method="POST">
        
          <input type="text" name="first" placeholder="UserName/Email">
          <input type="password" name="pwd" placeholder="password">
          <button type="submit" name="submit" class="btn btn-warning">Log In</button>
      </form>
    </div>


  </section>



<?php 
include_once "footer.php"
?>
