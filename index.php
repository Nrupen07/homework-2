<?php require_once("header.php"); ?>


  <h2 style="color:Gray;"> POST </h2>
  
<form action="handlepost.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">  
   <br> </br>

   <h3 style="color:Gray;"> GET </h3>
   </form>
   
  <form action="handleget.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
  
  </form>

</body>
</html>
