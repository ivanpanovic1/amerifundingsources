<?php

$field_first_name = $_POST['stp2-formFirstName'];
$field_last_name = $_POST['stp2-formLasttName'];
$field_email = $_POST['stp2-email'];
$field_phone1 = $_POST['stp2-Phone1'];
$field_address = $_POST['stp2-Address'];
$field_city = $_POST['stp2-HomeCity'];
$field_state = $_POST['stp2-HomeCity'];
$field_postal_code = $_POST['stp2-HomePostalCode'];
$field_under_contract = $_POST['stp2-underContract'];
$field_contract_close_date = $_POST['stp2-contractCloseDate'];
$field_residental_multi = $_POST['resi-multi'];
$field_purchase_price = $_POST['stp2-purchasePrice'];
$field_loan_amount = $_POST['stp2-loanAmount'];
$field_cash_contribution = $_POST['stp2-cashContribution'];
$field_length_time_repay = $_POST['stp2-length-time-repay'];
$field_foreclosure = $_POST['foreclosure'];
$field_pud = $_POST['pud'];
$field_property_address = $_POST['property-address'];
$field_property_city = $_POST['stp2-propertyCity'];
$field_property_state = $_POST['stp2-propertyState'];
$field_property_zip = $_POST['stp2-propertyZip'];
$field_market_value = $_POST['stp2-marketValue'];
$field_generate_income = $_POST['stp2-generateIncome'];
$field_loan_summary = $_POST['loan-summary-overview'];
$field_exit_strategy = $_POST['exit-strategy'];


$mail_to = 'Info@AmeriFundingSources.com';

$subject = 'You have new Funding Request Step 2 from http://www.amerifundingsources.com/';

$body_message = 'From: '.$field_first_name." ".$field_last_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Phone 1: '.$field_phone1."\n";
$body_message .= 'Home Street Address: '.$field_address."\n";
$body_message .= 'Home City: '.$field_city."\n";
$body_message .= 'Home State: '.$field_state."\n";
$body_message .= 'Home Postal Code: '.$field_postal_code."\n";
$body_message .= 'Is the Property Under Contract? '.$field_under_contract."\n";
$body_message .= 'Contract Close Date: '.$field_contract_close_date."\n";
$body_message .= 'Residential/Multi: '.$field_residental_multi."\n";
$body_message .= 'What is the Purchase Price? '.$field_purchase_price."\n";
$body_message .= 'Loan Amount Requested: '.$field_loan_amount."\n";
$body_message .= 'Cash Contribution Amount: '.$field_cash_contribution."\n";
$body_message .= 'Length of Time for Repayment: '.$field_length_time_repay."\n";
$body_message .= 'Foreclosure-REO-MLS: '.$field_foreclosure."\n";
$body_message .= 'PUD-Comm-Duplx: '.$field_pud."\n";
$body_message .= 'Property Address: '.$field_property_address."\n";
//$body_message .= 'Property's City: '.$field_property_city."\n";
//$body_message .= 'Property's State: '.$field_property_state."\n";
//$body_message .= 'Property's Zip Code: '.$field_property_zip."\n";

$body_message .= 'Market Value: '.$field_market_value."\n";
$body_message .= 'Does Property Currently Generate Income? '.$field_generate_income."\n";
$body_message .= 'Loan Summary Overview: '.$field_loan_summary."\n";
$body_message .= 'Exit Strategy: '.$field_exit_strategy."\n";

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
<script language="javascript" type="text/javascript">
    /*alert('Thank you for the message. We will contact you as soon as possible.');
    window.location = 'fundingRequestStep1.html';*/
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
