<?php 

	$path = preg_replace('/wp-content.*$/','',__DIR__);

	require_once($path."wp-load.php");

	if(isset($_POST['ideaproContactSubmit']) && $_POST['ideaproContactSubmit'] == "1")
	{
		/* get the information from the post submit */
		$name = sanitize_text_field($_POST['name']);
		$email = sanitize_email($_POST['email']);
		$phone = sanitize_text_field($_POST['phone']);
		$comments = sanitize_textarea_field($_POST['comments']);

		/* write email information for sending to admin */
		$to = 'josh@ideapro.com';
		$subject = 'Idea Pro Contact Form Submitted';
		$message = '';

		$message .= 'Name: '.$name.' <br />';
		$message .= 'Email: '.$email.'<br />';
		$message .= 'Phone: '.$phone.'<br />';

		$comments = wpautop($comments);
		$comments = str_replace("<p>","",$comments);
		$comments = str_replace("</p>","<br /><br />",$comments);

		$message .= 'Comments:<br />'.$comments.'<br /><br />';

		$message .= 'Thank you.';

		wp_mail($to,$subject,$message);


		/* return something for the user */
		$return = [];
		$return['success'] = 1;
		$return['message'] = 'Your information has been received.';

		echo json_encode($return);

	}

 ?>