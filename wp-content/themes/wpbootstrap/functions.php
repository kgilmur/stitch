<?php

function wpbootstrap_scripts_with_jquery()
{
  // Register the script like this for a theme:
  wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
  // For either a plugin or a theme, you can then enqueue the script:
  wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );



add_action( 'wp_ajax_send_email', 'callback_send_email' );
add_action( 'wp_ajax_nopriv_send_email', 'callback_send_email' );

function callback_send_email(){

    $email = $_REQUEST['email'];
    $companyname = $_REQUEST['companyname'];
          $subject = "Contact Form";
    $email_body = "The following company has contacted you.<br>".
    "Company Name: $companyname. <br>".
    "Email: $email. <br>";
          $to = "kgilmur@gmail.com";
          $headers  = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
          $headers .= "From: $companyname <$email> \r\n";
          $headers .= "Reply-To: $email \r\n";
    $mail = mail($to,$subject,$email_body,$headers);
    if($mail){
          echo "Email Sent Successfully";
          }
}

?>