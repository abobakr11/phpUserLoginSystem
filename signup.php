<?php include_once 'header.php';?>
  <section class="main-container">
      <div class="main-wrapper">
          <h2>Sign up</h2>
          <form class="signup-form" action="includes/signup.inc.php" method="POST">
          	<input type="text" name="first" placeholder="first name" >
          	<input type="text" name="first" placeholder="last name" >
          	<input type="email" name="email" placeholder="E-mail" >
          	<input type="text" name="uid" placeholder="Username" >
          	<input type="password" name="pwd" placeholder="password " >
          	<button type="submit" name="submit">Sign Up</button>
          </form>
      </div>
  </section>
<?php include_once 'footer.php';?> 