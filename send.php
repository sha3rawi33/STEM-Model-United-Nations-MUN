<?php


session_start();
//connect to database
$link = mysqli_connect ("localhost", "mun", "forthesakeofourstartup", "mun");
$postData = $statusMsg = ''; 
$status = 'error'; 
 
// If the form is submitted 
if(isset($_POST['submit'])){ 

// Escape user inputs for security
//-------------------------------------------------------------------
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);

 //insert into DB
$sql = "INSERT INTO contact(name, email, message) VALUES ('$name', '$email', '$message')";

		mysqli_query($link, $sql);
    }
?>
<!DOCTYPE html>
<script type="text/javascript">alert("Message Sent, Thanks ^_^")</script>
</html>