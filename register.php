<?php
//Database Connection
include("includes/config.php");
$conn = new mysqli($server, $username, $pass, $db);
//Get ID from Database
if(isset($_GET['register_id'])){
 $sql = "SELECT * FROM event WHERE id =" .$_GET['register_id'];
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);
}
//Update Information
if(isset($_POST['btn-update'])){
 $title = $_POST['title'];
 $speaker = $_POST['speaker'];
 $venue = $_POST['venue'];
 $date = $_POST['date'];
 $update = "UPDATE visitors SET name='$name', email='$email',subject='$subject',message='$message' WHERE id=". $_GET['register_id'];
 $up = mysqli_query($conn, $update);
 if(!isset($sql)){
 die ("Error $sql" .mysqli_connect_error());
 }
 else
 {
 header("location: messages.php");
 }
}
?>
<!--Create Edit form -->
<!doctype html>
<html>
<body>
<?php include("includes/meta.php");?>
<?php include("includes/header.php");?>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 white-bg right-container">
			<h1 class="logo-right hidden-xs margin-bottom-60">Technology Entrepreneurship Networking</h1>		
			<div class="tm-right-inner-container">
            <form method="post">
            <h1>Register For Event</h1>
            <label>Event Title:</label><input type="text" name="name" placeholder="Name" value="<?php echo $row['title']; ?>"><br/><br/>
            <label>Speaker Name:</label><input type="Email" name="email" placeholder="Email" value="<?php echo $row['speaker']; ?>"><br/><br/>
            <label>Venue:</label><input type="text" name="subject" placeholder="Subject" value="<?php echo $row['venue']; ?>"><br/><br/>
            <label>Date:</label><input type="text" name="message" placeholder="message" value="<?php echo $row['date']; ?>"><br/><br/>
            <button type="submit" name="btn-update" id="btn-update" onClick="update()"><strong>Update</strong></button>
            <a href="messages.php"><button type="button" value="button">Cancel</button></a>
            </form>
<!-- Alert for Updating -->
 </div>
 </div>

</body>
</html>
<script>
                function update(){
                var x;
                if(confirm("Updated data Sucessfully") == true){
                x= "update";
                }
                }
                </script>