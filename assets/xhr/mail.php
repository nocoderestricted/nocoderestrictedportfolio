<?php

require_once '../../vendor/autoload.php';


//form variables

$name = $_POST["name"];
$name = filter_var($name, FILTER_UNSAFE_RAW);

$email = $_POST["email"];
$email = trim($email);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

$website = $_POST["website"];
$website = trim($website);
$website = filter_var($website, FILTER_SANITIZE_URL);

$budget = $_POST["budget"];
$budget = filter_var($budget, FILTER_SANITIZE_NUMBER_INT);

$comment = $_POST["comment"];
$comment = preg_replace('#<[^>]+>#', ' ', $comment);


$required = array('');

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
// $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.nocoderestricted.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "donte@nocoderestricted.com";
$mail->Password = "Make_Jello_81";
$mail->SetFrom("donte@nocoderestricted.com");
$mail->Subject = "We have a new customer! Start a project! ";
$mail->Body = "<h3>{nocoderestricted}".$name."</h3> <p>".$comment."</p>";
$mail->AddAddress("donte@nocoderestricted.com");

if (empty($name) && empty($email) && empty($budget) && empty($comment)) {

	echo "Mail not sent one or inputs were not filled out!";

}else{
	if ($mail->Send()) {

		echo "Message has been sent";

	}else{
		echo "Mailer Error: " . $mail->ErrorInfo;
	}
}

 // if(!$mail->Send()){

 //    echo "Mailer Error: " . $mail->ErrorInfo;

 // }else{

 // 	echo "Message has been sent";
 // }


?>