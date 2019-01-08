<?php
if(isset($_POST['submit'])){
 $Fname=$_POST['Fname'];
 $lName=$_POST['lName'];
 $number=$_POST['number'];
 $email=$_POST['email'];
 $website=$_POST['website'];
 $msg=$_POST['msg'];
 
 $to='lukegammer@uk2.net';
 $subject='Frome Submission';
 $message="FirstName: ".$Fname."\n". "LastName: ".$lName."\n"."Phone: ".$number."\n". "website: ".$website."\n". "Wrote the following: "."\n\n".$msg;
 $headers="From: ".$email;
 
 if(mail($to, $subject, $message, $headers)){
  echo "<h1>Send Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
 }else{
  echo "Something went wrong!";
 }
 
}