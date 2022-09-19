<?php require_once("header.php"); ?>

<!doctype html>
<html lang = "en">
<body>
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
 
  <h1 style="color:Red;"> Welcome to Homework 2!! (PHP Reference with use of POST and GET functions) </h1>
   <br> </br>
   <h2 style="color:Gray;"> GET </h3>
   
  <form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
     <br> </br>
  <h3 style="color:Gray;"> POST </h2>
  
<form action="handlepost.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">  
  
</form>
</form>
</html>
</body>
