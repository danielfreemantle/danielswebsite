<?php 
	 
     if (isset($_POST["submit"])) {
	$name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailfrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailto = "danielfreemantle@outlook.com";
    $headers = "from: ".$mailfrom;
    $txt = "You have an e-mail from".$name."./n/n".$message;

	
	
    mail($mailto, $subject, $txt, $headers,);
    header("location: index.html?mailsend");
}

	 


	 
	 