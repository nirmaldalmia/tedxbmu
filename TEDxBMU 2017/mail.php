<?php
        $name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Contact form'; 
		$to = 'tedxbmu@bml.edu.in'; 
		$subject = 'Message from Contact form';
		
		$body = "From: $name\n E-Mail: $email\n Message: $message";    
              
               if(mail($to, $subject, $body, $from)){
                    echo '<script language="javascript">';
	echo 'alert("Your Message successfully sent! We will get back to you soon.");';
echo 'window.location.href="index.html";';
echo '</script>';
                    
                }else{
                 echo '<script language="javascript">';
echo 'alert("Sorry, your message is not delivered!");';
echo 'window.location.href="index.html";';
echo '</script>';
                }     
?>