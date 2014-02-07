 <?php

$field_first_name = $_POST['bor-firstname'];
$field_last_name = $_POST['bor-lastname'];
$field_email = $_POST['bor-email'];
$field_phone = $_POST['bor-phone'];
$field_address = $_POST['bor-address'];
$field_city = $_POST['bor-city'];
$field_state = $_POST['bor-state'];
$field_zip = $_POST['bor-zip'];

$field_purchaseRefi = $_POST['PurchaseRefi'];

//PURCHASE
$field_ploanamount = $_POST['ploanamount'];
$field_propertyAddress = $_POST['propertyAddress'];
$field_propertyCity = $_POST['propertyCity'];
$field_pstate = $_POST['pstate'];
$field_propertyZip = $_POST['propertyZip'];
$field_UnderContract = $_POST['UnderContract'];
$field_contractPurchasePrice = $_POST['contractPurchasePrice'];
$field_contractCloseYear = $_POST['contractCloseYear'];
$field_contractCloseMonth = $_POST['contractCloseMonth'];
$field_contractCloseDay = $_POST['contractCloseDay'];
$field_PropertyType = $_POST['PropertyType'];
$field_RehabNeeded = $_POST['RehabNeeded'];
$field_Occupied = $_POST['Occupied'];
$field_occupiedincome = $_POST['occupiedincome'];
$field_IntendToOccupy = $_POST['IntendToOccupy'];
$field_OtherProperties = $_POST['OtherProperties'];
$field_PropertyUse = $_POST['PropertyUse'];
$field_PaymentLength = $_POST['PaymentLength'];
$field_pur_tracking_info = $_POST['pur-tracking-info'];

//REFINANCE
$field_borLoanamount = $_POST['bor-loanamount'];
$field_borRpropertyAddress = $_POST['bor-rpropertyAddress'];
$field_borRpropertyCity = $_POST['bor-rpropertyCity'];
$field_borRstate = $_POST['bor-rstate'];
$field_borRpropertyZip = $_POST['bor-rpropertyZip'];
$field_FundsUse = $_POST['FundsUse'];
$field_FreeClear = $_POST['FreeClear'];
$field_borRefiArrears = $_POST['bor-refiArrears'];
$field_rPropertyType = $_POST['rPropertyType'];
$field_rRehabNeeded = $_POST['rRehabNeeded'];
$field_rOccupied = $_POST['rOccupied'];
$field_borRoccupiedIncome = $_POST['bor-roccupiedincome'];
$field_rPropertyUse = $_POST['rPropertyUse'];
$field_rPaymentLength = $_POST['rPaymentLength'];
$field_ref_tracking_info = $_POST['ref-tracking-info'];

$mail_to = 'Info@AmeriFundingSources.com';

$subject = 'You have new Borrower Info from http://www.amerifundingsources.com/';

$body_message = 'From: '.$field_first_name." ".$field_last_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Phone: '.$field_phone."\n";
$body_message .= 'Your Address: '.$field_address."\n";
$body_message .= 'Your City: '.$field_city."\n";
$body_message .= 'Your State: '.$field_state."\n";
$body_message .= 'Your Zip Code: '.$field_zip."\n\n";

if (($field_purchaseRefi == "purchase-trans-wrap") and ($field_purchaseRefi != "")) {
    $body_message .= 'Loan Amount Requested - PURCHASE '."\n\n";
    $body_message .= 'Loan Amount Requested - purchase: '.$field_ploanamount."\n";
    $body_message .= 'Property Address: '.$field_propertyAddress."\n";
    $body_message .= 'Property City: '.$field_propertyCity."\n";
    $body_message .= 'Property State: '.$field_pstate."\n";
    $body_message .= 'Property Zip Code: '.$field_propertyZip."\n";
    $body_message .= 'Is the property under contract? '.$field_UnderContract."\n";
    $body_message .= 'Contract Purchase Price: '.$field_contractPurchasePrice."\n";
    $body_message .= 'Contract Close Date: '.$field_contractCloseYear.".".$field_contractCloseMonth.".".$field_contractCloseDay."\n";
    $body_message .= 'Property Type: '.$field_PropertyType."\n";
    $body_message .= 'Do you intend to rehab the property? '.$field_RehabNeeded."\n";
    $body_message .= 'Is the property occupied? '.$field_Occupied."\n";
    $body_message .= 'If occupied, enter the monthly generated income: '.$field_occupiedincome."\n";
    $body_message .= 'Do you intend to occupy the property? '.$field_IntendToOccupy."\n";
    $body_message .= 'Do you currently own other properties free and clear? '.$field_OtherProperties."\n";
    $body_message .= 'What is the intended use for the property? '.$field_PropertyUse."\n";
    $body_message .= 'Preferred Length of Repayment: '.$field_PaymentLength."\n";
    $body_message .= 'How did you hear about us? '.$field_pur_tracking_info."\n";
}
elseif (($field_purchaseRefi == "refinance-trans-wrap") and ($field_purchaseRefi != "")) {
    $body_message .= 'Loan Amount Requested - REFINANCE '."\n\n";
    $body_message .= 'Loan Amount Requested - refinance: '.$field_borLoanamount."\n";
    $body_message .= 'Property Address: '.$field_borRpropertyAddress."\n";
    $body_message .= 'Property City: '.$field_borRpropertyCity."\n";
    $body_message .= 'Property State: '.$field_borRstate."\n";
    $body_message .= 'Property Zip Code: '.$field_borRpropertyZip."\n";
    $body_message .= 'Intended use of funds: '.$field_FundsUse."\n";
    $body_message .= 'Is the property free and clear? '.$field_FreeClear."\n";
    $body_message .= 'If not, how much is owed on the property? '.$field_borRefiArrears."\n";
    $body_message .= 'Property Type: '.$field_rPropertyType."\n";
    $body_message .= 'Do you intend to rehab the property? '.$field_rRehabNeeded."\n";
    $body_message .= 'Is the property occupied? '.$field_rOccupied."\n";
    $body_message .= 'If occupied, enter the monthly generated income: '.$field_borRoccupiedIncome."\n";
    $body_message .= 'What is the intended use for the property? '.$field_rPropertyUse."\n";
    $body_message .= 'Prefered Length of Repayment: '.$field_rPaymentLength."\n";
    $body_message .= 'How did you hear about us? '.$field_ref_tracking_info."\n";
}


$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        /*alert('Thank you for the message. We will contact you as soon as possible.');
        window.location = 'fundingRequest.html';*/
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        /*alert('Message failed. Please, send an email to Info@AmeriFundingSources.com');
        window.location = 'fundingRequest.html';*/
    </script>
<?php
}
?> 