<?php
error_reporting(0);
if(isset($_REQUEST['submit'])){

    $name=$_REQUEST['name'];
    $toEmail="pnsbharat1@gmail.com";
    $fromEmail=$_REQUEST['email'];
    $subject=$_REQUEST['subject'];
    $message=$_REQUEST['message'];
    $headers="From : $fromEmail";
    $sentMail = mail($toEmail, $subject,$message, $headers);
    if($sentMail){
    echo " . <script> alert(' Your message has been sent successfully. Our team will contact you soon. Thank you ') </script> . ";
    include("index.html");
    }else{
        echo " . <script> alert('sorry any tecnical essu please try again') </script> . ";
        include("index.html");
    }
}
?>