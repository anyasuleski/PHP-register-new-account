<html>
  <head>
    <title>PHP lab 9</title>
  </head>
  <body>
    <?php echo '<p> Please create a new user account:</p>'; ?> 

<form action="newuser.php" method="post">
<p> username: <input type="text" name="username" id="username"/> </p>
<p>password: <input type="text" name="password" id="password"/></p>
<p>email: <input type="text" name="email" id="email"/></p>


<input type="submit" />
</form>
<a href="forgottheps.php" target="_self">Forgot the password?</a>
<script src="script.js"></script>
  </body>
</html>
