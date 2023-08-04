<!DOCTYPE html>
<html>
<head>
<style>
.error{color:#FF0000;}
</style>
</head>
<body>
<?php
$nameErr= $emailErr= $genderErr="";
$name= $email= $gender="";
if($_SERVER["REQUEST_METHODE"]=="POST")
{
if(empty($_POST["name"]))
 {
$nameErr= "please enter a valid name";
 }
else
  {
$name=test_input($_POST["name"]);
if(!preg_match("/^[a-zA-Z-']*$/",$name))
    {
	$nameErr= "only letters and white spaces allowed";
    }
  }
}

if(empty($_POST["gender"])){
$genderErr="please select a gender";}
else{
$genderErr==test_input($_POST["gender"]);
}
}
function test_input($data){
                 $data=trim($data);
                 $data=stripslashes($data);
                 $data=htmlspecialchars($data);
                  return $data;
                 } 