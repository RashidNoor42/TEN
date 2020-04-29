<?php
  $msg = "";
  $msg_class = "";
  include("includes/config.php");
  $conn = new mysqli($server, $username, $pass, $db);
  if (isset($_POST['save_event'])) {
    // for the database
    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    // For image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileImage']['size'] > 20000) {
      $msg = "Image size should not be greated than 200Kb";
      $msg_class = "alert-danger";
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
        $title = $_POST['title'];
        $speaker=$_POST['speaker'];
        $date = $_POST['date'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        $details = $_POST['details'];
        $status = $_POST['status'];
        $venue=$_POST['venue'];
        
      
      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO event(title, speaker, details, date, start, end, picture,venue,status) VALUES ( '$title','$speaker','$details','$date','$start','$end', '$target_file','$venue','$status')";
        if(mysqli_query($conn, $sql)){
          $msg = "Image uploaded and saved in the Database";
          header("location: services.php");
          echo "ok";
          $msg_class = "alert-success";
        } else {
            echo "error1";
            echo mysqli_error($conn);
          $msg = "There was an error in the database";
          $msg_class = "alert-danger";
        }
      } else {
        echo "error 2";
        $error = "There was an erro uploading the file";
        $msg = "alert-danger";
      }
    }
  }
?>