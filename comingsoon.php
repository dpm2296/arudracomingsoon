<?php
if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $info=$_POST['subject'];
  $msg=$_POST['message'];

  $to='info@arudra.com';
  $subject="Website Contact Form Submission";
  $message="<html>
            <head></head>
            <body>
            <b>Name :</b><p style='font-size:18px;color:blue;margin:5px 0px;'>".$name."</p>
            <b>Email :</b><p>".$email."</p>
            <b>Subject :</b><p>".$info."</p>
            <b>Write the following Message :</b><br>
            <p>".$msg."</p>
            </body>
            </html>";
  $headers="from: ".$email;
  $headers = "MIME-Version: 1.0\r\n";
  $headers = "Content-Type: text/html; charset=ISO-8859-1\r\n";

  if (mail($to, $subject, $message, $headers)) {
    echo "<script type='text/javascript'>alert('Thanks for reaching out, our team will connect with you soon');

function redirect(){
    window.location.href='comingsoon.html';
}
    </script>";
  }
  else{
    echo "<script type='text/javascript'>alert('Try Again!! Something Went Wrong');
function redirect(){
    window.location.href='comingsoon.html';
}
    </script>";
  }
}
?>
