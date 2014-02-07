<?php
/********************************************************************************************************************
* This script is brought to you by Vasplus Programming Blog by whom all copyrights are reserved.
* Website: www.vasplus.info
* Email: info@vasplus.info
* Please, do not remove this information from the top of this page.
*********************************************************************************************************************/
session_start();
ob_start();
//ini_set('error_reporting', E_NONE);

if(isset($_POST["submitted"]) && $_POST["submitted"] == 1)
{
	//Read POST request params into global vars
	$to_email          = "ivan.panovic@gmail.com"; // Replace this email field with your email address or your company email address
	$from_fullname     = "Ivan Panovic"; //trim(strip_tags($_POST['formFirstName']));
	$from_email        = "ivan.panovic@c-code.com"; //trim(strip_tags($_POST['formEmail']));
	$email_subject     = "ameriFundingSources"; //trim(strip_tags($_POST['ameriFundingSources']));
	$email_message     = "ameriFundingSources"; //nl2br(trim(strip_tags($_POST['message'])));	
	
	//Set up the email headers
    $headers      = "From: $from_fullname <$from_email>\r\n";
    $headers   .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers   .= "Message-ID: <".time().rand(1,1000)."@".$_SERVER['SERVER_NAME'].">". "\r\n";   
	
	if($from_fullname == "")
	{
		$submission_status = '<div class="vpb_info" align="left">Please enter your fullname in the required field to proceed. Thanks.</div>';
	}
	elseif($from_email == "")
	{
		$submission_status = '<div class="vpb_info" align="left">Please enter your email address in the required email field to proceed.</div>';
	}
	elseif(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $from_email))
	{
		$submission_status = '<div class="vpb_info" align="left">Sorry, your email address is invalid. Please enter a valid email address to proceed. Thanks.</div>';
	}
	elseif($email_subject == "")
	{
		$submission_status = '<div class="vpb_info" align="left">Please enter the subject of your message in the required field to proceed.</div>';
	}
	elseif($email_message == "")
	{
		$submission_status = '<div class="vpb_info" align="left">Please enter your message in the required message field to proceed. Thanks.</div>';
	}	
	else
	{		
			$vasplus_mailer_delivers_greatly = @mail($to_email, $email_subject, $email_message, $headers);
					
			if ($vasplus_mailer_delivers_greatly) 
			 {
				//Displays the success message when email message is sent
				  $submission_status = "<div align='left' class='vpb_success'>Congrats $from_fullname, your email message has been sent successfully!<br>We will get back to you as soon as possible. Thanks.</div>";
			 } 
			 else 
			 {
				 //Displays an error message when email sending fails
				  $submission_status = "<div align='left' class='vpb_info'>Sorry, your email could not be sent at the moment. <br>Please try again or contact this website admin to report this error message if the problem persist. Thanks.</div>";
			 }
		
	}
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amerifunding Sources | Funding request</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bad+Script' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/main.css" />
    <script src="js/modernizr.js"></script>
</head>
<body>    
    <header>
        <div class="row">
            <div class="large-3 columns">
                <a href="index.html">
                    <img src="img/logo.png" alt="Amerifunding Sources" /></a>
                <!--<div class="logo-container">
                    <a class="logo" href="index.html">Ameri<span>F</span>undingsources <span class="sub-logo">The Private Money company</span></a>
                </div>-->
            </div>
            <div class="large-4 columns header-phone">
                <div>Get started today</div>
                <div class="header-phone-no">+1 800-841-5739</div>
            </div>
        </div>
    </header>
    <div class="off-canvas-wrap">
        <div class="inner-wrap">
            <nav class="tab-bar">
                <section class="left-small">
                    <a class="left-off-canvas-toggle menu-icon">
                        <span></span>
                    </a>
                </section>

                <section class="right tab-bar-section">
                    <h1 class="title">AmeriFounding Sources</h1>
                </section>

            </nav>

            <!-- Off Canvas Menu -->
            <aside class="left-off-canvas-menu">
                <!-- whatever you want goes here -->
                <ul>
                    <li class="divider"></li>
                    <li class="not-click has-dropdown">
                        <a href="about.html" class="">About</a>
                        <ul class="dropdown">
                            <li>
                                <a href="whySell.html">Why Sell ?</a>
                            </li>
                            <li>
                                <a href="certifiedNoteApprasial.html">Certified Note Apprasial</a>
                            </li>
                            <li>
                                <a href="receivablesFunding.html">Receivables Funding</a>
                            </li>
                            <li>
                                <a href="delinquentDebtPortfolios.html">Delinquent Debt portfolios</a>
                            </li>
                            <li>
                                <a href="delinquentDebtsRequirements.html">Delinquent Debts Requirements</a>
                            </li>
                            <li>
                                <a href="benefitsOfGoodCredit.html">Benefits of Good credit</a>
                            </li>
                            <li>
                                <a href="protectYourCredit.html">Protect Your Credit</a>
                            </li>
                            <li>
                                <a href="identityTheft.html">Identity Theft</a>
                            </li>
                            <li>
                                <a href="probateEstateFunding.html">Probate/Estate Funding</a>
                            </li>
                            <li>
                                <a href="lifeSettlementGuide.html">Life Settlement Guide</a>
                            </li>
                            <li>
                                <a href="lifeSettlement.html">Life Settlement</a>
                            </li>
                            <li>
                                <a href="businessNotes.html">Business Notes</a>
                            </li>
                            <li>
                                <a href="sellYourHomeFast.html">Sell Your Home - Fast!!</a>
                            </li>
                            <li>
                                <a href="attentionRealtors.html">Attention Realtors</a>
                            </li>
                            <li>
                                <a href="testimonials.html">Testimonials</a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="faq.html" class="">FAQ</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="contact.html" class="">Contact</a>

                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="glossary.html" class="">Glossary</a>
                    </li>
                </ul>
            </aside>

            <section class="main-menu">
                <div class="row">
                    <div class="large-12 columns">
                        <nav class="top-bar docs-bar">

                            <section class="top-bar-section">
                                <ul class="right">
                                    <li class="divider"></li>
                                    <li class="not-click has-dropdown">
                                        <a class="" href="about.html">About</a>
                                        <ul class="dropdown">
                                            <li>
                                                <a href="whySell.html">Why Sell ?</a>
                                            </li>
                                            <li>
                                                <a href="certifiedNoteApprasial.html">Certified Note Apprasial</a>
                                            </li>
                                            <li>
                                                <a href="receivablesFunding.html">Receivables Funding</a>
                                            </li>
                                            <li>
                                                <a href="delinquentDebtPortfolios.html">Delinquent Debt portfolios</a>
                                            </li>
                                            <li>
                                                <a href="delinquentDebtsRequirements.html">Delinquent Debts Requirements</a>
                                            </li>
                                            <li>
                                                <a href="benefitsOfGoodCredit.html">Benefits of Good credit</a>
                                            </li>
                                            <li>
                                                <a href="protectYourCredit.html">Protect Your Credit</a>
                                            </li>
                                            <li>
                                                <a href="identityTheft.html">Identity Theft</a>
                                            </li>
                                            <li>
                                                <a href="probateEstateFunding.html">Probate/Estate Funding</a>
                                            </li>
                                            <li>
                                                <a href="lifeSettlementGuide.html">Life Settlement Guide</a>
                                            </li>
                                            <li>
                                                <a href="lifeSettlement.html">Life Settlement</a>
                                            </li>
                                            <li>
                                                <a href="businessNotes.html">Business Notes</a>
                                            </li>
                                            <li>
                                                <a href="sellYourHomeFast.html">Sell Your Home - Fast!!</a>
                                            </li>
                                            <li>
                                                <a href="attentionRealtors.html">Attention Realtors</a>
                                            </li>
                                            <li>
                                                <a href="testimonials.html">Testimonials</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a class="" href="faq.html">FAQ</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a class="" href="contact.html">Contact</a>

                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a class="" href="glossary.html">Glossary</a>
                                    </li>
                                </ul>
                            </section>
                        </nav>
                    </div>
                </div>
            </section>

            <div class="row">
                <div class="large-12 columns">
                    <section role="main">
                        <h1>Funding request</h1>
                        <div class="row">
                            <div class="large-8 columns">
                                <h4>Lorem ipsum dolor</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel nisi orci. Aliquam eu tristique nunc. Duis scelerisque, tortor ac dignissim varius, dolor ligula cursus est, eu rhoncus nisl lorem et magna. Maecenas sodales condimentum arcu, ac imperdiet nulla viverra lacinia. Curabitur sollicitudin, urna in convallis fermentum, sapien tellus sollicitudin quam, ac sagittis nunc risus convallis dolor. </p>
                                <p>Ut non massa auctor, posuere magna sit amet, gravida velit. Nunc sollicitudin ante ac tellus scelerisque commodo. Nulla suscipit felis ac consequat tristique. In semper bibendum justo. Sed sit amet dolor fringilla, iaculis mauris non, congue sem. </p>
                                <p>Sed vitae tempor metus, non malesuada ligula. Ut ac tincidunt diam, eget viverra velit. Duis id erat metus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam mollis lacus a sapien dictum, sit amet pulvinar diam pharetra. Aenean eu sem faucibus lectus bibendum tempor. Morbi quam arcu, pharetra a tincidunt ut, porttitor at ipsum. In sit amet mollis dui. Maecenas accumsan vehicula nibh. Curabitur molestie erat erat, quis tristique lectus euismod et. Nullam at arcu nec urna gravida vestibulum. Donec leo libero, sagittis quis neque eget, cursus imperdiet tortor. Praesent feugiat diam tellus, in sodales diam euismod vitae. Donec suscipit eros et tortor volutpat fermentum. Morbi interdum accumsan urna ac auctor. </p>
                            </div>
                            <div class="large-4 columns funding-request-form">
                                <form method="post" action="fundingRequest.php" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="large-12 columns">
                                            <div class="text-input">
                                                <label>First Name</label><input type="text" id="formFirstName" name="formFirstName" value="" />
                                                <label>Last Name</label><input type="text" id="formLastName" name="formLastName" value="" />
                                                <label>Email</label><input type="text" id="formEmail" name="formEmail" value="" />
                                                <label>State</label><input type="text" id="formState" name="formState" value="" />
                                                <label>Phone</label><input type="text" id="formPhone" name="formPhone" value="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row radio-input">
                                        <div class="large-3 columns caption">I want more information about : </div>
                                        <div class="large-9 columns radio-group">
                                            <input type="radio" name="option" value="How to borrow on real estate" /><label>How to borrow on real estate</label>
                                            <input type="radio" name="option" value="How to lend on great deals" /><label>How to lend on great deals</label>
                                            <input type="radio" name="option" value="Fast Track to Funding Workshop" /><label>Fast Track to Funding Workshop</label>
                                            <div>
                                                <?php echo $submission_status; ?>
                                            </div><!-- Display success or error messages -->
                                            <input type="submit" class="btn-request-send button" value="Submit" id="submitted" name="submitted" >
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <footer>
                <div class="row">
                    <div class="large-4 medium-6 small-12 columns">
                        <span>&#169; Amerifunding Sources 2014</span>
                    </div>
                    <div class="large-8 medium-6 columns">
                        <ul class="clearfix">
                            <li><a href="about.html">About</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="glossary.html">Glossary</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
            <a class="exit-off-canvas"></a>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).foundation();
    </script>
</body>
</html>
