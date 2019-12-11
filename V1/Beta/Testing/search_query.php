<?php
  if(isset($_POST['submit'])){
  if(isset($_GET['go'])){
  if(preg_match("/[A-Z  | a-z]+/", $_POST['name'])){
  $name=$_POST['name'];
  //connect  to the database
  $db=mysql_connect  ("servername", "username",  "password") or die ('I cannot connect to the database  because: ' . mysql_error());
  //-select  the database to use
  $mydb=mysql_select_db("yourDatabase");
  //-query  the database table
  $sql="SELECT ID, FirstName, LastName FROM Contacts WHERE  FirstName LIKE '%" . $name . "%' OR LastName LIKE '%" . $name  ."%'";
  }
  else{
  echo  "<p>Please enter a search query</p>";
  }
  }
  }
?>