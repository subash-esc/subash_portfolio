<?php session_start();
if(isset($_POST['submit'])) {
$youremail = 'subash2esc@gmail.com';
$fromsubject = 'Contact Form from MyWebsite';
$name = $_POST['Name'];
$mail = $_POST['Email'];
 
$message = $_POST['Message']; 
$to = $youremail; 
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type:text/html; charset=UTF-8' . "\r\n";
$headers .= "From: ".$_POST['Name']."<".$_POST['Email'].">\r\n"; 
$headers .= "Reply-To: ".$_POST["Email"]."\r\n";
$mailsubject = 'Messsage recived for'.$fromsubject.' Contact Page';
$body = $fromsubject.'
	
	The person that contacted you is  '.$name.'
	 E-mail: '.$mail.'
	
	 Message: 
	 '.$message.'	
	|---------END MESSAGE----------|'; 
echo "Thank you fo your feedback. I will contact you shortly if needed.<br/>Go to <a href='/index.php'>Home Page</a>"; 
								mail($to, $body, $headers);
 } else { 
echo "You must write a message. </br> Please go to <a href='/index.html'>Home Page</a>"; 
}
?> 