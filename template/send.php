<?PHP
$to = $_POST['emailCombo'];
$subject = "Adamantine Pictures Enquiry";
$e = $_POST['txtEmail'];
$message = "Name: " . $_POST['txtName'];
$message .= "\nE-mail: " . $e;
$message .= "\nPhone: " . $_POST['txtPhone'];
$message .= "\n\nMessage: " . $_POST['txtMessage'];
$headers = "From: $e";
$headers .= "\nReply-To: $e";
$sentOk = mail($to,$subject,$message,$headers);
echo "sentOk=" . $sentOk;
?>
