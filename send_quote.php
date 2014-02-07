 <?php

$field_first_name = $_POST['first-name'];
$field_last_name = $_POST['last-name'];
$field_home_phone = $_POST['home-phone'];
$field_work_phone = $_POST['work-phone'];
$field_fax_number = $_POST['fax-number'];
$field_email = $_POST['email'];

$field_city = $_POST['city'];
$field_state = $_POST['state'];
$field_property_desc = $_POST['property-desc'];
//single, 2-4 unit... checkboxes
$field_desc_prop = $_POST['desc-prop'];

$field_down_payment = $_POST['down-payment'];
$field_selling_price = $_POST['selling-price'];
$field_current_val = $_POST['current-val'];
//Owner Occupied & Rental
$owner_type = $_POST['owner-type'];
//mortgage checkboxes
$mortgage = $_POST['mortgage'];
$field_current_balance = $_POST['current-balance'];
$field_date_of_note = $_POST['date-of-note'];
$field_amortized_over = $_POST['amortized-over'];
$field_orig_amount_note = $_POST['orig-amount-note'];
$field_interest_rate = $_POST['interest-rate'];
$field_next_payment_due = $_POST['next-payment-due'];
$field_number_payments_made = $_POST['number-payments-made'];
$field_monthly_payment = $_POST['monthly-payment'];

$field_number_of_payment_remain = $_POST['number-of-payment-remain'];
//Is there a balloon Payment:
$balloon_yesno = $_POST['balloon-yes-no'];
$field_present_balance = $_POST['present-balance'];
$field_balloon_due_date = $_POST['balloon-due-date'];
$field_balloon_amount = $_POST['balloon-amount'];
$field_note_owner = $_POST['note-owner'];
//Is the note paying on time?
$on_time = $_POST['on-time'];
$field_interested_in_selling = $_POST['interested-in-selling'];
//Credit of Payer: 
$payer_credit = $_POST['payer-credit'];
//How did you hear of us?
$field_trace_media = $_POST['trace-media'];
$field_search_engine = $_POST['search-engine'];
$field_search_keywords = $_POST['search-keywords'];
$field_comments = $_POST['comments'];


$mail_to = 'Info@AmeriFundingSources.com';

$subject = 'You have new Quote Request from http://www.amerifundingsources.com/';

$body_message = 'From: '.$field_first_name." ".$field_last_name."\n";
$body_message .= 'Home Phone: '.$field_home_phone."\n";
$body_message .= 'Work Phone: '.$field_work_phone."\n";
$body_message .= 'Fax number: '.$field_fax_number."\n";
$body_message .= 'E-mail: '.$field_email."\n\n";
$body_message .= 'PROPERTY INFORMATION'."\n";

$body_message .= 'City: '.$field_city."\n";
$body_message .= 'State: '.$field_state."\n";
$body_message .= 'Description of Property: '.$field_property_desc."\n";
//single, 2-4 unit... checkboxes
$body_message .= 'Description: '.$field_desc_prop."\n";


$body_message .= 'Down Payment $: '.$field_down_payment."\n";
$body_message .= 'Selling Price $: '.$field_selling_price."\n";
$body_message .= 'Current Value $: '.$field_current_val."\n";
//Owner Occupied & Rental \n\n
$body_message .= 'Owner occupied: '.$owner_type."\n\n";


$body_message .= 'NOTE INFORMATION'."\n";

//mortgage checkboxes 
$body_message .= 'Current Balance (If available): '.$field_current_balance."\n";
$body_message .= 'Date of Note: '.$field_date_of_note."\n";
$body_message .= 'Amortized Over (Months): '.$field_amortized_over."\n";
$body_message .= 'Original Amount of Note: '.$field_orig_amount_note."\n";
$body_message .= 'Interest Rate: '.$field_interest_rate."\n";
$body_message .= 'Next Payment Due: '.$field_next_payment_due."\n";
$body_message .= 'Number of Payments Made: '.$field_number_payments_made."\n";
$body_message .= 'Monthly Payment $: '.$field_monthly_payment."\n";
$body_message .= 'Number of Payments Remaining: '.$field_number_of_payment_remain."\n";

//Is there a balloon Payment: 
$body_message .= 'Is there a balloon Payment: '.$balloon_yesno."\n";

$body_message .= 'Present balance of 1st Mtg: '.$field_present_balance."\n";
$body_message .= 'If yes, when is it due: '.$field_balloon_due_date."\n";
$body_message .= 'What is the Balloon Payment Amount: '.$field_balloon_amount."\n";

//Is this note yours or are you assisting someone with this note sale?
$body_message .= 'Is this note yours or are you assisting someone with this note sale?: '.$field_note_owner."\n";
//Is the note paying on time?: 
$body_message .= 'Is the note paying on time?: '.$on_time."\n";

$body_message .= 'Are you interested in selling the whole note or only part of it? '.$field_interested_in_selling."\n";
//Credit of Payer:
$body_message .= 'Credit of Payer: '.$payer_credit."\n";

//How did you hear of us?
$body_message .= 'How did you hear of us? '.$field_trace_media."\n";

$body_message .= 'Search engine: '.$field_search_engine."\n";
$body_message .= 'What Keywords did you use? '.$field_search_keywords."\n";
$body_message .= 'Comments: '.$field_comments."\n";

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
        window.location = 'quotes.html';*/
    </script>
<?php
}
?> 