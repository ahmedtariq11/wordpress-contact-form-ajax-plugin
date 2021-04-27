<?php 
/**
* Plugin Name: Idea Pro Contact Form Ajax
* Description: This form submits through an ajax call
**/

/**
My List of items

1. Write the form code as a shortcode
2. Write the process page that it submits to
3. Write the javascript / ajax that will take the submission
4. Write the email send function
**/


function ideapro_contact_form()
{
	/* create a string variable to hold the content */
	$content = ''; /* create a string */

	//$content .= '<form method="post" action="" >';

	$content .= '<style>.ideapro_form label { display:block; padding:15px 0px 4px 0px; } .ideapro_form input[type=text],input[type=email] { width:400px; padding:8px; } .ideapro_form textarea { width:400px; height:200px; padding:8px;}</style>';

	$content .= '<div id="response_div"></div>';

	$content .= '<div class="ideapro_form">';
	$content .= '<label for="your_name">Your Name</label>';
	$content .= '<input type="text" name="your_name" id="your_name" placeholder="Your Full Name" />';

	$content .= '<label for="your_email">Your Email Address</label>';
	$content .= '<input type="email" name="your_email" id="your_email" placeholder="Enter Your Email Address" />';

	$content .= '<label for="phone_number">Phone Number</label>';
	$content .= '<input type="text" name="phone_number" id="phone_number" placeholder="Your Phone Number" />';

	$content .= '<label for="your_comments">Questions or Comments</label>';
	$content .= '<textarea name="your_comments" id="your_comments" placeholder="Say something nice"></textarea>';

	$content .= '<br /><br /><input type="submit" name="ideapro_contact_submit" id="ideapro_contact_submit" onclick="submit_contact_form()" value="SUBMIT YOUR INFORMATION" />';

	$content .= '</div>';

	//$content .= '</form>';

	return $content;

}
add_shortcode('contact_form','ideapro_contact_form');


function ideapro_add_javascript()
{
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://www.ideapro.io/wp-content/plugins/ideapro-contact-form-ajax/js/ideapro.js"></script>
	<?php	
}
add_action('wp_footer','ideapro_add_javascript');










 ?>