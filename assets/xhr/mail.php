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
// $budget = filter_var($budget, FILTER_SANITIZE_NUMBER_INT);

$comment = $_POST["comment"];
$comment = preg_replace('#<[^>]+>#', ' ', $comment);

$today = date("F j, Y, g:i a");

// $required = array('');

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
// $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.nocoderestricted.com";
$mail->Port = 465; // or 587

$mail->Username = "donte@nocoderestricted.com";
$mail->Password = "Make_Jello_81";
$mail->SetFrom("donte@nocoderestricted.com");
$mail->Subject = "We have a new customer! Start a project! ";
$mail->Body = '<!DOCTYPE html><html lang="en" style="margin: 0;padding: 0;border: 0;font-size: 100%;vertical-align: baseline;"><head><meta charset="UTF-8"><title>Document</title><link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700,800,300" rel="stylesheet" type="text/css"><link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"></head><body style="margin: 0;padding: 0;border: 0;font-size: 100%;vertical-align: baseline;line-height: 1;"><div id="wrapper" style="margin: 0 auto;padding: 0;border: 0;font-size: 62.5%;vertical-align: baseline;max-width: 600px;font-family: "Open Sans", sans-serif;"><div class="header" style="margin: 0;padding: 0;border: 0;font-size: 100%;vertical-align: baseline;"><h1 style="margin: 0;padding: 30px 0;border: 0;font-size: 28px;vertical-align: baseline;color: #413d3d;border-bottom: 6px solid #ae9361;font-weight: 800;">The Start of Something New!</h1></div><div class="client" style="margin: 0;border: 0;font-size: 100%;vertical-align: baseline;overflow: hidden;"><span style="margin: 0;padding: 0;border: 0;font-size: 4em;font: normal normal normal 14px/1 FontAwesome;vertical-align: baseline;display: inline-block;text-rendering: auto;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;float: left;width: 102px;height: 68px;max-height: 68px;min-height: 68px;text-align: center;background: #413d3d;color: #fff;border-left:5px solid #ae9361;"><img alt="" style="margin-top: 18px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAABqElEQVR4nNWWT0tVQRiHHwMxyhYtrIuLFqLbiAQhiJYF4cJF0tpv4NKtK4UoqK/g0m35FdxFiMsoCbrcIBfmvbSR+7i4I8j457zneAfxB8OBl9+Z9znvmXlnRlSuU7euNXsDgIfAGrADdNPYAdaBViMCNTreqIderMPkqTNnGGBR7V+S/ET9uhAjgUXYAr4Dd4NF7QIzQCdijqyB5RrJAcbTOyFFAOZrJD/R66gx8gt6wJ2aAD0GlajUjegDPxvM+2OYAJ8bAHyJGkttw2ngT8QcqUAHWAIip5bJG0o+eCPetRbV7iVdsJs8Q2nFY+qquqceqO/VB2pLXVd31V4auynWSp4P6j+1o26qz+sCjKtfz/nC/+qG+ladUm+nMZViG8mTq6+u1AF4d1GNr6hX5wHku+Ae8Ds9h61vwFOyxZzvgoVCyQGeAC/yYA5wxjBkvawCeFwYYK4K4FFhgJkqgPuFASaqAEYLA4xVAewXBvhbBRA+RhtqKw/kjWgS2KbMYvwFPAPap4N5BdrALPAJ2AOOrpj0iMGN6mOat50bIheSoroRl9KiOgZnzsacQqffwQAAAABJRU5ErkJggg=="/></span><div style="margin: 0;padding: 0;border: 0;font-size: 100%;vertical-align: baseline;float: left;margin-left: 2em;"><h2 style="margin: 0;padding: .3em 0;border: 0;font-size: 2.4em;vertical-align: baseline;color: #413d3d;font-weight: 400;">Client Name:</h2><p style="margin: 0;padding: .2em 0;border: 0;font-size: 1.8em;vertical-align: baseline;color: #413d3d;font-weight: 800;">'.$name.'</p></div></div><div class="client" style="margin: 0;padding: 0 0 0 0;border: 0;font-size: 100%;vertical-align: baseline;overflow: hidden;"><span style="margin: 0;padding: 0;border: 0;font-size: 4em;font: normal normal normal 14px/1 FontAwesome;vertical-align: baseline;display: inline-block;text-rendering: auto;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;float: left;width: 102px;height: 68px;max-height: 68px;min-height: 68px;text-align: center;background: #413d3d;color: #fff;border-left:5px solid #ae9361;"><img alt="" style="margin-top: 18px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAABrklEQVR4nO2Wv04UURSHvxnXBCVZC6ItUTuxM66FL6CRxCfAShsLC7OFSucbGBPkEfBfozS2UEBoLKCisJSYuAWxMQvyWcyZjEGEHXTnkuAvmWTmnnPP98vce25uppJSeVL6UTDQChOPgNvAWEPcHjAHPGsB08DThsClLgIdoJ2pn4DzDRsotZEDZxPBAU7mwHJCA0uZ2gGWaL4jdoDrObACPGwYDvAYWEZtqaj31S2Hr231QTBPoH5Q2zHQUdeHCF9XrwVrRH1FBFbViQiMqrNDgM9GbdRL6kfjo9R3tavmMX5T3fgH4M9Ri6jdDZa7DZRaVC9EbEx9/RfwN1GDqLm4O2EvA6rf1LsRR51SN2uAN9U7v8y/FzV/058MlHqnnou8cXVhAPhC5BJz3++XfJAB1S/qpNUaTqv9PfL66hOrPXQr5u6rQQyUem7ROqiX1Xl1J555qy4aidyBVMeAFu16xWptz1idIahX1bU6BesaUP1h0Rk3At6O97cWf6OWMk17K01+J/xvIKe4oabS1xx4mdDAHOpp9YXaO0RLHlY9dUY9lSXuwqOxCY+3gZ8gcNEJ3Ly0kAAAAABJRU5ErkJggg=="/></span><div style="margin: 0;padding: 0;border: 0;font-size: 100%;vertical-align: baseline;float: left;margin-left: 2em;"><h2 style="margin: 0;padding: .3em 0;border: 0;font-size: 2.4em;vertical-align: baseline;color: #413d3d;font-weight: 400;">Client Email:</h2><p style="margin: 0;padding: .2em 0;border: 0;font-size: 1.8em;vertical-align: baseline;color: #413d3d;font-weight: 800;">'.$email.'</p></div></div><div class="client" style="margin: 0;border: 0;font-size: 100%;vertical-align: baseline;overflow: hidden;"><span style="margin: 0;padding: 0;border: 0;font-size: 4em;font: normal normal normal 14px/1 FontAwesome;vertical-align: baseline;display: inline-block;text-rendering: auto;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;float: left;width: 102px;height: 68px;max-height: 68px;min-height: 68px;text-align: center;background: #413d3d;color: #fff;border-left:5px solid #ae9361;"><img alt="" style="margin-top: 18px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAC2ElEQVR4nMWXS4hPYRjGf/MnmYWh3FPDQi4luYRSJKYp2ZhSykIUG1JEjFKyYYEosVDKJcUCGylKZqEkFMp1LORabkNyDT+Lc/58jnOVmqdO57zfeb/3eb73O+c972lQ6U7UupW9ooBmYD1wAXgHGBzfgdvAfqClUly16BiuHla/WR631AUlYhcKWK6+DwK/je0v6t4SQk6pA/I4GjIewhqwG1gV22+Ag8BH4CEwAbgEPAfmACOBhRlJfgDMjc+lt2BXsIpz6qAMv1b1WYlMPFSHlN2CxcHEo2qPDPJ5CZLN6iz1jvo5RcRFtVYkYKjaFU/oUHtmkKNOUs+on2L/bfH4eHVEvOok1hQJ2BM4z8whT4o+q85JjI9STyYEvFb7ZAnoF6xGtVMdV1JEs9o/vm5S24y28mZRFsIgS1Oct5QUEB6D1K0pseq4EvqHFasl5SW5mlXAcrAaWJtzfzLQt26EAiakODdVIO5PVCvagV45fg3AxF9WkI6ulHR1qr1Lpr4tJ+1JLErbgj4pakcCHUBjwepHAxuLk/Q3V89g8GOGiGnAAWAd8CyYtwwYA3wD7gFTKgj48OsqSGFnTsqeqEfUBtOrYPJ9L0Jr2hbcyFE8DFgE7Irt+kP2GfgBtFVYPcD1+kUooKNgUi0W0UzUlJwH5gMvK5LfAV6kCThBtJo8DATuA9uBs8A1YAfRc1AWx/6w/PNVOlpxL++qU9XnsX1PfZzj/0EdHHImBYwy6naq4JG6Tz2kNhp9QWcZlfEfCd/6FzO3H2ivKKCOFSmxNgT375pS1NIE1NQTFcm/qy2JOK3qu/h+lzo2hSuzJWtUT1cQEH7hhqr7/Z3+1+r0DJ7crriHutO/9zENl9Ql6nH1azB+Qx2dw1Hqv2CGerl0LiJ0qZvUXkXxqzQas9UD6tMM0k9GfeRKtW/ZuFn/BUUYTFQRm4AvwCuivr9KQQL4ZwH/Dd3+d/wToMMD+o7FQTUAAAAASUVORK5CYII="/></span><div style="margin: 0;padding: 0;border: 0;font-size: 100%;vertical-align: baseline;float: left;margin-left: 2em;"><h2 style="margin: 0;padding: .3em 0;border: 0;font-size: 2.4em;vertical-align: baseline;color: #413d3d;font-weight: 400;">Client Webiste:</h2><p style="margin: 0;padding: .2em 0;border: 0;font-size: 1.8em;vertical-align: baseline;color: #413d3d;font-weight: 800;">'.$website.'</p></div></div><div class="client" style="margin: 0;border: 0;font-size: 100%;vertical-align: baseline;overflow: hidden;"><span style="margin: 0;padding: 0;border: 0;font-size: 4em;font: normal normal normal 14px/1 FontAwesome;vertical-align: baseline;display: inline-block;text-rendering: auto;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;float: left;width: 102px;height: 68px;max-height: 68px;min-height: 68px;text-align: center;background: #413d3d;color: #fff;border-left:5px solid #ae9361;"><img alt="" style="margin-top: 18px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAABhUlEQVR4nO2XPUsDQRCG39NY6j8QO8soptRYJSAiFmL8AabSH6GNWFmotaVgK4qCvaBYSAwWdmJhI5JC8KOIPjYjnGFzuyeRS5GBYbjJOzPPbvaOuwhQltaX6fQeQLcAHEkiK4/I+DZI+gu2JUUd9J20AJfBywgzdz/cdgPkACV4CTgDGhZLHv0AcNs6yAVQA4Y9zdYddV/AmqduBKi3A9gCFgNWvhSr2bXcXSy34KnPARWb9wsgqejH+4EH02/E8nGAe9OF9EsNMGvaQ7uOHACYLggg7ZOwbHFeUlXSZhtdKbRhWoBRi5GkPUkVj67jAK+Burf/Aqh1WKe0h3DctAfAFFCw/IRd79vv+dBDmPvDDlxJepR0HstfW5yTdCGp/pcdeAFObDVJ1NPAJ25rApOe+gJwavOcj+J3oOxpsuqAaAIrnroZ4CNe5AIAeAIGPc2KtpKGxaJHPwQ8tw5qBwCw7GmY1quuIUm34Vi68+m1vCvZFa9kx1kCRBlvQHd8F/QAMrVv0f9yM96GKrEAAAAASUVORK5CYII="/></span><div style="margin: 0;padding: 0;border: 0;font-size: 100%;vertical-align: baseline;float: left;margin-left: 2em;"><h2 style="margin: 0;padding: .3em 0;border: 0;font-size: 2.4em;vertical-align: baseline;color: #413d3d;font-weight: 400;">Client Budget:</h2><p style="margin: 0;padding: .2em 0;border: 0;font-size: 1.8em;vertical-align: baseline;color: #413d3d;font-weight: 800;">$'.$budget.'</p></div></div><div class="client" style="margin: 0;border: 0;font-size: 100%;vertical-align: baseline;overflow: hidden;"><span style="margin: 0;padding: 0;border: 0;font-size: 4em;font: normal normal normal 14px/1 FontAwesome;vertical-align: baseline;display: inline-block;text-rendering: auto;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;float: left;width: 102px;height: 68px;max-height: 68px;min-height: 68px;text-align: center;background: #413d3d;color: #fff;border-left:5px solid #ae9361;"><img alt="" style="margin-top: 18px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAACLElEQVR4nO3Xz4uNURzH8e+dJo1iIiP5UWSIJDWJlAUzs7GxEguyJiQWyp6yYm1H/gILKbORGoz8KEahLPwszahpJs2oaeZl8Zyb67r3mblzH43iW6fnnnO+5/N53/Oc57nfW0LMZ7TMq/vfBrAnIm5HxEhEaKKNR8TTiOiu0G6PiOsRMRgRJ34hQOAsphUXL7A+aa/B86r5S2kuAt3JfBwnsaw8Oce2HAsq+uvwvgbkVbQE7qSBU00aV7elyaQ97caHGhAXAqOp01GgeQeeJd2HCaITH6sA+qKiU5T5CrzEJAaS9gMsxgZ8SmOT2Fc0wGq8xgT242KF/v0EsVF2Jg5Jh7AogLV4K7ule3HF79GPRWgrrysKoDN9qyHswLUa5uU4Wrm2CIBN+JwAtuFmHeMpHKte3yzAVnzBK2zB3Trm33GglkYzAF0YxmNsxpM65mPoqaczV4CdGEnrjqcdqBVD2J6nNReA3bKTPlXHtBzvZI9crl6jAN34Jtv6LgzWMR/EqtloNgownnIPpv4S3Ksy75f9DpTXtOXoNQxQK3ch3qTxW6lfnuuR3a7CAcr5u2RPAdxAa1X+8EzazQBUxmWUcvL/KMD5WeTX1WyNiLFUs3VExNcZashSA/XmynQdzUtqiYhH6fPhBsRnE0fSdSA3C72ymnACpzVfGS3HGdn7f1r27sg9A4Fzde5vMzGddHOBKzu96POzRpxrjMoK3d6ZzBEl/v83/McBfgAkt1L9qqtm/gAAAABJRU5ErkJggg=="/></span><div style="margin: 0;padding: 0;border: 0;font-size: 100%;vertical-align: baseline;float: left;margin-left: 2em;"><h2 class="display" style="margin: 0;padding: .3em 0;border: 0;font-size: 2.4em;font: vertical-align: baseline;display: block;text-align: center;color: #413d3d;font-weight: 400;">About Project:</h2></div><p style="margin: 0;padding: 0;border: 0;font-size: 1.4em;vertical-align: baseline;clear: both;line-height: 2.4;padding-top: 2.4em;">'.$comment.'</p></div><div class="footer" style="margin: 0;padding: 2em 0;border: 0;font-size: 100%;vertical-align: baseline;width: 600px;background: #ae9361;"><p class="time" style="margin: 0;padding: 0;border: 0;font-size: 1.3em;vertical-align: baseline;padding-left: 1em;color: #fff;">'.$today.'</p></div></div></body></html>';

$mail->IsHTML(true);
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