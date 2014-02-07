 <?php

$field_email = $_POST['stay-in-touch-email'];

$mail_to = 'Info@AmeriFundingSources.com';

$subject = 'New Stay in Touch email from http://www.amerifundingsources.com/';

$body_message = 'You have new Stay in Touch email from: '."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= $page_origin;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        /*alert('Thank you for the message. We will contact you as soon as possible.');
        window.location = 'index.html';*/
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        /*alert('Message failed. Please, send an email to Info@AmeriFundingSources.com');
        window.location = 'index.html';*/
    </script>
<?php
}
?> 