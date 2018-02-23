<?php
    // get the data from the form
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $usremail = $_POST['usremail'];
	$usrnum = $_POST['usrnum'];
	$pub = $_POST['pub'];
	$os = $_POST['os'];
	

?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php echo "Hi $fname.  Thank you for completing the survey.  
		You have been added to the $pub mailing list.<br>
		<b>The following information has been saved in our system:</b><br>
		Name: $fname $lname<br>
		E-mail: $usremail<br>
		Phone: $usrnum<br>
		OS: $os"; ?>
	</body>
</html>
