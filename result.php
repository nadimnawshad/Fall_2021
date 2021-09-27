<?php
$validatefname="";
$validatelname="";
$validateage="";
$validateemail="";
$validatecheckbox="";
$validateradio="";
$j=$p=$c="";
$fname=$lname=$password=$email=$designation="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];

if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<5))
{
    $validatefname= "Please enter first name";

}
else
{
    $name=$_REQUEST["fname"];
}

if(empty($_REQUEST["lname"]) || (strlen($_REQUEST["lname"])<5))
{
    $validatelname= "Please enter last name";

}
else
{
    $name=$_REQUEST["lname"];
}

if(empty($_REQUEST["age"]) || is_numeric($_REQUEST["lname"]))
{
    $validatelname= "Please enter your age";

}
else
{
    $name=$_REQUEST["age"];
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="Please enter email";
}
else{
    $validateemail= "your email is ".$email;
}




if(!isset($_REQUEST["JAVA"])&&!isset($_REQUEST["PHP"])&&!isset($_REQUEST["C++"]))
{
    $validatecheckbox = "please select at least one checkbox";
    
}
else{
   if(isset($_REQUEST["JAVA"]))
   {
       $j= $_REQUEST["JAVA"];
   }
   if(isset($_REQUEST["PHP"]))
   { 
       $p= $_REQUEST["PHP"];
   }
   if(isset($_REQUEST["C++"]))
   {
    $c= $_REQUEST["C++"];
   }
}
if(isset($_REQUEST["designation"]))
{
    $validateradio= $_REQUEST["designation"];
}
else{
    $validateradio= "please select  one radio";
}

}
?>