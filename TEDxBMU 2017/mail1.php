<?php

		$email = $_POST['email'];
		$from = 'I want to be informed when the website is updated!'; 
		$to = 'tedxbmu@bml.edu.in'; 
		$subject = 'Message from Contact form';
		
		$body = "From: E-Mail: $email\n";    
              
               if(mail($to, $subject, $body, $from)){
                    echo '<script language="javascript">';
	echo 'alert("Thanks! We will keep you updated!");';
echo 'window.location.href="Partners.htm";';
echo '</script>';
                    
                }else{
                 echo '<script language="javascript">';
echo 'alert("Sorry, your message is not delivered!");';
echo 'window.location.href="Partners.htm";';
echo '</script>';
                }     
?>