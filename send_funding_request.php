 <?php
$field_first_name = $_POST['formFirstName'];
$field_last_name = $_POST['formLastName'];
$field_email = $_POST['formEmail'];
$selected_radio = $_POST['advise'];

$mail_to = 'Info@AmeriFundingSources.com';

$subject = 'You have new Funding Request from http://www.amerifundingsources.com/';

$body_message = 'From: '.$field_first_name." ".$field_last_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'I want more information about: '.$selected_radio."\n";

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        /*alert('Thank you for the message. We will contact you as soon as possible.');
        window.location = 'fundingRequestStep2.html';*/
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        /*alert('Message failed. Please, send an email to Info@AmeriFundingSources.com');
        window.location = 'fundingRequestStep1.html';*/
    </script>
<?php
}
?> 