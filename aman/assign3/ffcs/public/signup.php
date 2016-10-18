<?php 
	include("../includes/database_connection.php");
	include("../includes/functions.php");
	include("../includes/session.php");
?>
<?php
	global $error_in_name,$error_in_email,$error_in_mobile;
	$salt_string="@!";
	
		$fname = mysqli_real_escape_string($connection,(mysql_entities_fix_string($_POST['fname'])));
		$lname = mysqli_real_escape_string($connection,(mysql_entities_fix_string($_POST['lname'])));
		$email = mysqli_real_escape_string($connection,(mysql_entities_fix_string($_POST['email'])));
		$mobile = mysqli_real_escape_string($connection,(mysql_entities_fix_string($_POST['mobile'])));
		$validation_of_fname=valid_name($fname);
		$validation_of_lname=valid_name($lname);
		$validation_of_email=valid_email($email,$connection);
		$validation_of_mobile=valid_mobile($mobile);
		$check=0;
		if($validation_of_fname==1 && $validation_of_lname==1 && $validation_of_email==1 && $validation_of_mobile==1)
		{
			$check=1;
		}
		else
		{
			$check=0;
		}
		//echo "$check";
		if ($check==1) 
		{
			/*$fname.=$salt_string;
			$lname.=$salt_string;
			$email.=$salt_string;*/
			//echo "$email";
			$query = "INSERT INTO user_details(fname,lname,email,mobile) VALUES('$fname','$lname','$email',	$mobile)";
			//echo "$query";
			$result = mysqli_query($connection,$query);
			if (!$result)
			{
				echo "Signup failed";
			}
			else
			{
				echo "Success Signup";
				require 'PHPMailer-master/PHPMailerAutoload.php';
	 
				$mail = new PHPMailer;
				 
				$mail->isSMTP();                                      
				$mail->Host = 'smtp.gmail.com';                       
				$mail->SMTPAuth = true;                               
				$mail->Username = 'loankernel@gmail.com';                   
				$mail->Password = 'mriam811';               
				$mail->SMTPSecure = 'tls';                            
				$mail->Port = 587;                                    
				$mail->setFrom('loankernel@gmail.com', 'Loan Kernel Team');
				$mail->addAddress("$email");       
				$mail->WordWrap = 50; 
				$mail->isHTML(true);                                  
				 
				$mail->Subject = 'Loan Kernel registration.';
				$mail->Body    = 'You have successfully registered for <b>Loan Kernel</b> Regards, Team Loan Kernel. ';
				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';	

				if(!$mail->send()) {
				   echo 'Message could not be sent.';
				   echo 'Mailer Error: ' . $mail->ErrorInfo;
				   exit;
				}
			}	
		}
		else
			echo "Incorrect Details";

?>