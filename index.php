<!DOCTYPE html>
<html>
<body>

<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$to = "koti2kamjula@gmail.com";
$subject = "Test mail";
$body = "Hello! This is a simple email message.";
//$body = "Name:$name </br> Phone:$phone </br> Email:$email";
mail($to,$subject,$body);
echo "Mail Sent.";
?>

</body>
</html>