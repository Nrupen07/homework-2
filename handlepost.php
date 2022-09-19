<html>
  <body>
    <form action="handlepost.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
    Welcome <?php echo $_POST["name"]; ?><br>
    your email address is: <?php echo $_POST["email"]; ?>
    
  </body>
</html>
