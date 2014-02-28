<?php
if(isset($_POST['submit'])){
$to =(isset($_POST['to'])) ? $_POST['to']:false;
$subject =(isset($_POST['subject'])) ? $_POST['subject']:false;
$msg = (isset($_POST['msg'])) ? $_POST['msg']:false;
$header ="From : rochelletongol@gmail.com";



$retval = mail($to,$subject,$msg,$header);
ini_set( 'SMTP', 'smtp.gmail.com' ); // must be set to your own local ISP
ini_set( 'smtp_port', '587' ); // assumes no authentication (passwords) required 
ini_set( 'sendmail_from', 'rochelletongol@gmail.com' ); // can be any e-mail address, but must be set

if($retval === true){
	echo "Message sent.";
}else{
	echo "Unable to send message.";
}
}

 ?>

<html>
<head>
	<title>Sending Email Using PHP</title>
</head>
<body>
	<form method = 'post' action='<? $_SERVER['PHP_SELF']; ?>'>
		To: <input type='text' name='to'>
		Subject: <input type='text' name='subject'>
		Message:<br/>
		<textarea name='msg'></textarea>
		<input type='submit' value ='Send' name='submit'>
	</form>

</body>
</html>
