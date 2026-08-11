<?php
//require_once('config.php');

		$email = $_REQUEST['email'];
		
		
		
		//if(isset($_POST['submit'])) {  

			$subject = 'Newsletter Subscription';

			
			$to = $from = "info@darius.com";
			$mailheaders = 'From: '.$from.' <'.$from.'>';
			$mailbody = 'Newsletter Subscription Info:' . "\r\n"

						.'Email: '.$email. "\r\n"
						;

			$emailSent =mail($to, $subject, $mailbody, $mailheaders);
			if($check ==''){
				$check ='0';
			}
			
			if($emailSent){
			echo '<p class="success">Thank you for subscription.</p>';
		}else{
			echo '<p class="error">There was some problem sending your request, please retry!</p>';
		}

		//}
		//header('location:index.html?succuss=true');
	
?>
