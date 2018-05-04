<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
  <?php
  if(!empty($_POST['firstname']['secondname'])){
      echo " {$_POST['firstname']['secondname']} ";

        }

  ?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
enter your name:<input type="text" name="firstname"><br>
enter second name:<input type="text" name="secondname"><br>
enter your surnmame:<input type="text" name="surname"><br>
enter your countryCode:<input type="text" name="countryCode"><br>
enter your Tel:<input type="text" name="tel"><br>
enter your country:<input type="text" name="country"><br>


<input type="submit" >
</form>
