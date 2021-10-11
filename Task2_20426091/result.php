<?php
$validatefname="";
$validatelname="";
$validateage="";
$validateemail="";
$validatecheckbox="";
$validateradio="";
$j=$p=$c="";

$fname=$lname=$password=$email=$age=$designation=$filetoupload="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$age=$_REQUEST["age"];
$filetoupload =$_REQUEST["filetoupload"];

if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<5))
{
    $validatefname= "Please enter first name";

}


if(empty($_REQUEST["lname"]) || (strlen($_REQUEST["lname"])<5))
{
    $validatelname= "Please enter last name";

}


if(empty($_REQUEST["age"]) || !is_numeric($_REQUEST["age"]))
{
    $validateage= "Please enter your age";

}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="Please enter email";
}

if(empty($_REQUEST["password"]))
{
    $validateage= "Please enter your password";

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

if(!isset($_REQUEST["designation"]))
{
    $validateradio= "please select  one radio";
}


}

       $formdata = array(
          'firstName'=> $fname,
          'lastName'=> $lname,
          'age'=> $age,
          'designation'=>$designation,
          'language'=>array($j,$p,$c),
          'email'=>$email,
          'password'=>$password,
          'image'=>$filetoupload
       );
       $existingdata = file_get_contents('mydata.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
       
       if(file_put_contents("mydata.json", $jsondata)) {
            echo "Data successfully saved <br>";
        }
       else 
            echo "no data saved";

?>
