<?php

//Clean the html entities
function clean($string){
	return htmlentities($string);
}

//To check if the given email address already exists or not
function email_exists($email){
	$sql="SELECT id FROM alumnus WHERE email='$email'";
	$result=query($sql);
	if(row_count($result)==1){
		return true;
	}else{
		return false;
	}
}

//To check if the given email address already exists or not
function rollno_exists($rollno){
	$sql="SELECT id FROM alumnus WHERE rollno='$rollno'";
	$result=query($sql);
	if(row_count($result)==1){
		return true;
	}else{
		return false;
	}
}

function send_email($email,$subject,$msg, $replyto = 'saar@iitp.ac.in'){
// 	return (mail($email,$subject,$msg,$headers));

	require 'PHPMailerAutoload.php';

	$mail = new PHPMailer;

	//$mail->SMTPDebug = 4;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'tls://smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = "dscappsocietyiitp@gmail.com";                 // SMTP username
	$mail->Password = "appified@1504";                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('saar@iitp.ac.in', 'SAAR IIT Patna');
	$mail->addAddress($email);     // Add a recipient
	//$mail->addAddress('ellen@example.com');               // Name is optional
	$mail->addReplyTo($replyto, 'Information');
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = $subject;
	$mail->Body    = $msg;
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
	   // echo 'Message could not be sent.';
	   // echo 'Mailer Error: ' . $mail->ErrorInfo;
	    return false;
	} else {
	  //  echo 'Message has been sent';
	    return true;
	}
}

function format_date($ar){
	$ar = explode(' ',$ar);
    $date = explode('-',$ar[0]);
    $time = explode(':',$ar[1]);   
	$convertmon = array(
		"01" => "Jan",
		"02" => "Feb",
		"03" => "Mar",
		"04" => "Apr",
		"05" => "May",
		"06" => "Jun",
		"07" => "Jul",
		"08" => "Aug",
		"09" => "Sep",
		"10" => "Oct",
		"11" => "Nov",
		"12" => "Dec"
	);
	$formated = array( $date[2].' '.$convertmon[$date['1']].' '.$date[0],
		$time[0].':'.$time[1]
	);
	return $formated;
}


	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

