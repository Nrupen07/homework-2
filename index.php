<!doctype html>
<html lang = "en">
<body>
 <nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      PHP Homework
    </a>
  </div>
</nav>
  <h1> Welcome to Homework 2!! </h1>
  <h2> POST </h2>
  
<form action="handlepost.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
  
  <h3> GET </h3>
  <form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
</form>
</html>
</body>
