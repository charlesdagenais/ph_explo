<?php	
	if(empty($_POST['list-search']))
	{
		return false;
	}
	
	$list-search = $_POST['list-search'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from (null).";
	$email_body = "You have received a new message. \n\n".
				  "List-Search: $list-search \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>