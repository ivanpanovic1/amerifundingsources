 <?php
$field_first_name = $_POST['len-firstname'];
$field_last_name = $_POST['len-lastname'];
$field_email = $_POST['len-email'];
$field_phone = $_POST['len-phone'];
$field_street = $_POST['len-homeStreetAddress'];
$field_state = $_POST['len-homeState'];
$field_postalCode = $_POST['len-homePostalCode'];
$field_lenderType = $_POST['len-lenderType'];
$field_stateLocated = $_POST['len-stateLocated'];
$field_statesToFund = $_POST['len-statesToFund'];
$field_howFast = $_POST['len-howFast'];
$field_fundPerLoan = $_POST['len-fundPerLoan'];
$field_stateYesNo = $_POST['len-yes-no'];
$field_amount = $_POST['len-amount'];
$field_tracking_info = $_POST['tracking-info'];



$selected_radio = $_POST['advise'];

$mail_to = 'Info@AmeriFundingSources.com';

$subject = 'You have new mail from Lender Network from http://www.amerifundingsources.com/';

$body_message = 'From: '.$field_first_name." ".$field_last_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Phone: '.$field_phone."\n";
$body_message .= 'State: '.$field_state."\n";
$body_message .= 'Home Street Address: '.$field_street."\n";
$body_message .= 'Home State: '.$field_state."\n";
$body_message .= 'Home Postal Code: '.$field_postalCode."\n";
$body_message .= 'Which type of lender are you? '.$field_lenderType."\n";
$body_message .= 'In which state are you located? : '.$field_stateLocated."\n";
$body_message .= 'In which States are you looking to fund in? '.$field_statesToFund."\n";
$body_message .= 'How fast can you fund a loan in business days? '.$field_howFast."\n";
$body_message .= 'How much are you looking to fund per loan?: '.$field_fundPerLoan."\n";
$body_message .= 'Have you ever lent money before?: '.$field_stateYesNo."\n";
$body_message .= 'What Loan-to-Values were you looking to fund per loan? '.$field_amount."\n";
$body_message .= 'How did you hear about us? '.$field_tracking_info."\n";




$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        /*alert('Thank you for the message. We will contact you as soon as possible.');
        window.location = 'lenderNetwork.html';*/
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        /*alert('Message failed. Please, send an email to Info@AmeriFundingSources.com');
        window.location = 'lenderNetwork.html';*/
    </script>
<?php
}
?> 