<?php
include("includes/config.php");
$name;
$email;
$phone;
$intro;
$facebook;
$linked;
$batch;
$subject="Welcome to TEN";
// if(!isset($_SESSION["l"]))
// {
//     header("Location:login.php");
// }
$conn = new mysqli($server, $username, $pass, $db);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
   
    if(isset($_POST['name']))
    {
        $name=$_POST['name'];
       $name=sanitizeInput($name);
    }
    if(isset($_POST['email']))
    {
        $email=$_POST['email'];
        $email=sanitizeInput($email);

    }
    if(isset($_POST['phone']))
    {
        $phone=$_POST['phone'];
        $phone=sanitizeInput($phone);

    }
    if(isset($_POST['intro']))
    {
        $intro=$_POST['intro'];
        $intro=sanitizeInput($intro);

    }
    if(isset($_POST['batch']))
    {
        $batch=$_POST['batch'];
        $batch=sanitizeInput($batch);

    }
    if(isset($_POST['linked']))
    {
        $linked=$_POST['linked'];
        $linked=sanitizeInput($linked);

    }
    if(isset($_POST['facebook']))
    {
        $facebook=$_POST['facebook'];
        $facebook=sanitizeInput($facebook);

    }
    if($stmt = $conn->prepare("INSERT INTO alumni (name , email, phone, intro, batch, linked, facebook) VALUES (?,?,?,?,?,?,?)")){
        $stmt->bind_param("sssssss" ,$name, $email ,$phone ,$intro, $batch, $linked, $facebook);
          $stmt->execute();
          $stmt->close();
          $conn->close();
    
    


            ///////////////////////SEND MAIL////////////////////////
            $headers = 'From: rashidnoor6309@gmail.com' . "\r\n" . 
            'MIME-Version: 1.0' . "\r\n" .
            'Content-Type: text/html; charset=utf-8';
 
        $result = mail($email, $subject, $intro,$headers );
        var_dump($result);
        header("Location:index.php?s=success");
    }
}
