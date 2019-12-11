<?php
  if(isset($_POST['submit'])){
  if(isset($_GET['go'])){
  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){
  $name=$_POST['name'];
  //connect  to the database
  $db=mysql_connect  ("localhost", "id8373849_thegamecompanyofficial2",  "testpass") or die ('I cannot connect to the database  because: ' . mysql_error());
  //-select  the database to use
  $mydb=mysql_select_db("id8373849_userdata");
  //-query  the database table
  $sql="SELECT  id, first_name, last_name FROM userdata WHERE first_name LIKE '%" . $search .  "%' OR last_name LIKE '%" . $search ."%'";
  //-run  the query against the mysql query function
  $result=mysql_query($sql);
  //-create  while loop and loop through result set
while($row=mysql_fetch_array($result)){
  $FirstName =$row['FirstName'];
            $LastName=$row['LastName'];
            $PhoneNumber=$row['PhoneNumber'];
            $Email=$row['Email'];
//-display  the result of the array
echo  "<ul>\n";
echo  "<li>" . $FirstName . " " . $LastName .  "</li>\n";
echo  "<li>" . $PhoneNumber . "</li>\n";
echo  "<li>" . "<a href=mailto:" . $Email .  ">" . $Email . "</a></li>\n";
echo  "</ul>";
}
}
?>