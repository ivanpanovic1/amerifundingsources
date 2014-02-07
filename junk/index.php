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
	$to_email          = "zoran.knezevic@c-code.com"; // Replace this email field with your email address or your company email address
	$from_fullname     = trim(strip_tags($_POST['vpbfullname']));
	$from_email        = trim(strip_tags($_POST['email']));
	$email_subject     = trim(strip_tags($_POST['subject']));
	$email_message     = nl2br(trim(strip_tags($_POST['message'])));
	$security_code     = trim(strip_tags($_POST['vpb_captcha_code']));
	
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
	elseif($security_code == "")
	{
		$submission_status = '<div class="vpb_info" align="left">Please enter the security code in its field to send us your message. Thanks.</div>';
	}
	elseif(!isset($_SESSION['vpb_captcha_code']))
	{
		$submission_status = '<div class="vpb_info" align="left">Sorry, there is no session created on this page at the moment, please refresh this page and try again.</div>';
	}
	else
	{
		if(empty($_SESSION['vpb_captcha_code']) || strcasecmp($_SESSION['vpb_captcha_code'], $_POST['vpb_captcha_code']) != 0)
		{
			//Note: the captcha code is compared case insensitively. If you want case sensitive match, update the check above to strcmp()
			$submission_status = '<div class="vpb_info" align="left">Sorry, the security code you provided was incorrect, try again.</div>';
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
}
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<title>DataFye</title>
<link href="/images/favicon.png" rel="icon" type="image/x-icon" />
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/contact.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/js.js"></script>
<!--<script type="text/javascript" src="js/waypoints.min.js"></script>-->
<!--<script src="js/waypoints.js" type="text/javascript"></script>-->
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
<script type="text/javascript" src="js/jquery.sticky.js"></script>
<!-- Menu Toggle 
<script src="js/menu.js"></script> -->

<!-- This function refreshes the security or captcha code when clicked on the refresh link -->
<script type="text/javascript">
function vpb_refresh_aptcha()
{
	return document.getElementById("vpb_captcha_code").value="",document.getElementById("vpb_captcha_code").focus(),document.images['captchaimg'].src = document.images['captchaimg'].src.substring(0,document.images['captchaimg'].src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>


</head>

<body class="home">

<div class="nav-mobile">
        <a class="sticky-logo"><img src="images/logo2.png" width="242" height="32"  alt=""/></a>
      <nav class="navigation">
      	 <!--<a href="#" id="pull" class="button">Navigation</a> -->
        <ul>
   	      <li data-slide="1" class="active"><a href="#">Home</a></li>
      	    <li data-slide="2"><a href="#">Company</a></li>
      	    <li data-slide="3"><a href="#">Services</a></li>
      	    <li data-slide="4"><a href="#">Contact</a></li>
   	    <!--  <li data-slide="5"><a href="#">Privacy/Terms &amp; Conditions</a></li>-->                                 
        </ul>
      </nav>
      
     </div>



<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="2">
  <section>
	<header>
    	<div class="logo"> &nbsp; </div>
        <div class="icons-wrap">         
            <div class="icons"><a href="#"><img src="images/facebook.png" alt="Facebook" class="icons" /></a></div>
            <div class="icons"><a href="#"><img src="images/twitter.png" alt="Twitter" class="icons" /></a></div>        
            <div class="icons"><a href="#"><img src="images/google.png" alt="Google" class="icons" /></a></div>        
       </div>
	</header>
    
    
    
    
    <article>
   		<div class="introduction">
        An innovative, high performance online customer acquisition network. We deliver highly targeted, profitable customers to online marketers
        </div>
        
        <ul class="list">
        	<li><span class="image1 first">&nbsp;</span>Email Marketing</li>
        	<li><span class="image2">&nbsp;</span>Lead Generation</li>
        	<li><span class="image3">&nbsp;</span>List Management</li>
        	<li><span class="image4">&nbsp;</span>Traffic Generation</li>
        	<li><span class="image5">&nbsp;</span>Revenue Sharing</li>     
        </ul>
           
    </article>

    

     
    </section>
    
    
    
</div><!--End Slide 1-->


<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="2">
<section>
	<header>
    	
	</header>
    <article>
   		<div class="title">
			<h1>Company</h1><span class="separator"></span><h2>Who we are</h2>
        </div>
        
        <div class="content">

<p>        	
Datafye is a marketing company that is engineered for effective customer acquisition. By leveraging our extensive marketing solutions, we generate leads aligned with your ROI. <img src="images/company.jpg" width="423" height="298"  alt="Company" class="image" />
</p>

We provide high quality and consistent services while working continually to optimize your campaigns, turning each marketing dollar you spend into as much revenue as possible. 
        </div>
                
    </article>

    
</section>
</div><!--End Slide 2--> 


<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="2">
<section>
	<header>
    	
	</header>
    <article>
   		<div class="title">
			<h1>Services</h1><span class="separator"></span><h2>What we do</h2>
        </div>
        
        <div class="content">

		<ul class="list">
        	<li>
            	<span class="image1 first">&nbsp;</span>
				<span class="title">Email Marketing</span>
            	<span class="description">Top Level campaigns designed to the customers needs</span>                
                
            </li>
        	<li>
            	<span class="image2">&nbsp;</span>
                <span class="title">Lead Generation</span>
            	<span class="description">Exclusive and real-time leads</span>
            </li>
        	<li>
            	<span class="image3">&nbsp;</span>
                <span class="title">List Management</span>
                <span class="description">Inbox Delivery, Online Reporting, Superior Account Management</span>
            </li>
        	<li>
                <span class="image4">&nbsp;</span>
                <span class="title">Traffic Generation</span>
				<span class="description">Clients will enjoy new and diverse targeted traffic</span>                
            </li>
        	<li>
            	<span class="image5">&nbsp;</span>
                <span class="title">Revenue Sharing</span>
                <span class="description">Innovative revenue sharing oppurtunities</span>
            </li>     
        </ul>

        </div>
                
    </article>

    
</section>
</div><!--End Slide 3-->

<a id="contact">&nbsp;</a>
<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="2">
<section>
	<header>
    	
	</header>
    <article>
   		<div class="title">
			<h1>Contact</h1><span class="separator"></span><h2>Where are we</h2>
        </div>
        
        <div class="content">
			<div class="content-left">
        
            
           
<!-- Code Begins Here -->
<div class="vasplus_programming_blog_wrapper" align="left">

<center>


<div >

<form method="post" action="index.php#contact" enctype="multipart/form-data">

<div class="label-fields">
<div>Your Fullname:</div>
<div class="input"><input type="text" id="vpbfullname" name="vpbfullname" value="<?php echo strip_tags($_POST["vpbfullname"]); ?>" class="vpb_input_fields"></div>
</div>

<div class="label-fields">
<div >Email Address:</div>
<div class="input"><input type="text" id="email" name="email" value="<?php echo strip_tags($_POST["email"]); ?>" class="vpb_input_fields"></div>
</div>

<div class="label-fields">
<div>Email Subject:</div>
<div class="input"><input type="text" id="subject" name="subject" value="<?php echo strip_tags($_POST["subject"]); ?>" class="vpb_input_fields"></div>
</div>

<div class="label-fields">
<div >Your Message:</div>
<div class="input"><textarea id="message" name="message" class="vpb_input_fields textarea"><?php echo strip_tags($_POST["message"]); ?></textarea></div>
</div>


<div class="label-fields">
<div >Security Code:</div>
<div class="input">
<div class="vpb_captcha_wrappers"><input type="text" id="vpb_captcha_code" name="vpb_captcha_code" class="vpb_input_fields"></div></div>
</div>


<div class="label-fields"><div class="vpb_captcha_wrapper input"><img src="vasplusCaptcha.php?rand=<?php echo rand(); ?>" id='captchaimg' ></div>
<div class="captcha-small">Can't read the above security code? <a href="javascript:void(0);" style="text-decoration:none;" onClick="vpb_refresh_aptcha();">Refresh</a></div>

</div>


<div ><?php echo $submission_status; ?></div><!-- Display success or error messages -->

<div>
<input type="hidden" id="submitted" name="submitted" value="1">
<input type="submit" class="vpb_general_button"  value="Submit">
</div>


</form>
</div>

</center>
</div>
<!-- Code Ends Here -->           
            
            
            	
            </div>
			<div class="content-right">
            
<span>Street Name 52/34, 1th floor </span>

<span>City name 11 000 </span>

<span>Country name, Europe </span>

<span>Phone/Fax: +123 45 67 89 00 </span>

<span>Mobile: +123 45 67 89 00 </span>

<span>Mail: <a href="info@example.com">info@datafye.com</a></span>

<div class="icons-wrap">         
   <div class="icons"><a href="#"><img src="images/facebook.png" alt="Facebook" class="icons" /></a></div>
   <div class="icons"><a href="#"><img src="images/twitter.png" alt="Twitter" class="icons" /></a></div>   <div class="icons"><a href="#"><img src="images/google.png" alt="Google" class="icons" /></a></div>        
</div> 
            
            </div>            

        </div>
                
    </article>

    
</section>
</div><!--End Slide 4--> <!--End Slide 4--> 

<!--<div class="slide" id="slide5" data-slide="5" data-stellar-background-ratio="2">
<section>
	<header>
    	
	</header>
    <article>
   		<div class="title">
			<h1>Privacy</h1><span class="separator"></span><h2>Terms &amp; Conditions</h2>
        </div>
        
        <div class="content">
			
           <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget est tristique neque commodo faucibus. Sed bibendum risus vel varius pellentesque. Nam nec quam mattis, adipiscing velit eu, tempor magna. <p>Aliquam posuere eleifend pulvinar. Aenean volutpat ut justo dapibus feugiat. Cras nibh sem, semper quis massa et, consequat molestie purus. </p> <p>Fusce nec luctus enim. Pellentesque et lacus vitae massa sollicitudin cursus non vitae libero. Vestibulum bibendum pharetra urna, interdum facilisis magna iaculis nec. Proin aliquet sollicitudin varius. Nulla imperdiet sed sapien nec eleifend. </p>

        </div>
                
    </article>

    
</section>
</div>--><!--End Slide 5--> 


<footer>
   
     <div class="wrap">
        <a class="sticky-logo"><img src="images/logo2.png" width="242" height="32"  alt=""/></a>
      <nav class="navigation">
      	 <!--<a href="#" id="pull" class="button">Navigation</a> -->
        <ul>
   	      <li data-slide="1" class="active"><a href="#">Home</a></li>
      	    <li data-slide="2"><a href="#">Company</a></li>
      	    <li data-slide="3"><a href="#">Services</a></li>
      	    <li data-slide="4"><a href="#">Contact</a></li>
   	    <!--  <li data-slide="5"><a href="#">Privacy/Terms &amp; Conditions</a></li>-->                                 
        </ul>
      </nav>
       <a class="button down" data-slide="2" title=""></a>

       <div class="bottom-navigation">
           <span class="step-prev" href="#"></span>
           <span class="step-next" href="#"></span>
       </div>
     </div> 
</footer>



</body>
</html>
