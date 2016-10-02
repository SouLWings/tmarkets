<?php
if (isset($_POST['name'])){
require 'PHPMailer-master/PHPMailer-master/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = '	vps.adsplo.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 465;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "admin@w3currency.com";

//Password to use for SMTP authentication
$mail->Password = "admin@123";

//Set who the message is to be sent from
$mail->setFrom('admin@w3currency.com', 'W3Currency Admin');

//Set an alternative reply-to address
$mail->addReplyTo('admin@w3currency.com', 'W3Currency Admin');

//Set who the message is to be sent to
$mail->addAddress('alan_98797@hotmail.com');

//Set the subject line
$mail->Subject = 'Inquiry';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML('ame:$_POST[name]<br />phone:$_POST[phone]<br />email:$_POST[email]<br />message:$_POST[message]<br />');

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
$mail->addAttachment('images/Jing.jpg');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

}

 ?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="js/jquery-3.1.0.min.js" type="text/javascript"> </script>
<script src="js/bootstrap.min.js" type="text/javascript"> </script>
<script src="https://use.fontawesome.com/85b96044da.js"></script>
<link rel="stylesheet" type="text/css"  href="css/component.css"></link>
<link  rel="stylesheet" type="text/css" href="css/default.css"></link>
<link  rel="stylesheet" type="text/css" href="css/mystyle.css"></link>
<script src="js/modernizr.custom.js"></script>
<script src="js/classie.js"></script>
<link  rel="stylesheet" type="text/css" href="css/mystyle.css"></link>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

</head>

<body>

    <div id='fix-bg'>
    </div>
    <!-- Static navbar -->
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php"><font color= #40e0d0 size="4px">Home</font></a></li>
            <li class="active"><a href="service.php">Our Service</a></li>
            <li><a href="http://www.siambitcoin.com/">Webboard</a></li>
            <li><a href="https://www.bitcoinaec.com/BitCoinAEC/home/">Trading Bit Coin</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <!--ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul-->
        </div><!--/.nav-collapse -->
      </div>
    </nav>



    <div class="container " style="min-height:calc( 100% - 123px );    background: rgba(0,0,0,0.85);color:#ddd">
    	<h1>Our Service</h1>
		<p>
			W3Currency aims to provide a platform for the online e-coin players who wish to exchange the items or products online.
		</p>
		<p>
			We are trusted currency exchanger with more than 5 years experience. Our service are fast and we promise to be performed and completed within 1 hour from the time of your request during our operating hours. We operate 7 days a week.
		</p>
		<h2>
			Get ready in 3 simple steps:
		</h2>
		<div class='row'>
			<div class='col-sm-4'>
				<h3>1. Request for Top-up</h3>
				<p>
					Deposit money in to our bank account and drop in a top-up request.
				</p>
			</div>
			<div class='col-sm-4'>
				<h3>2. Successful Top-Up</h3>
				<p>
					Your request is processed instantly upon confirmation of your payment.
				</p>
			</div>
			<div class='col-sm-4'>
				<h3>3. Convert to targeted e-coins</h3>
				<p>
					You can transfer the money to your online e-coin platform Account. Enjoy!
				</p>
			</div>
		</div>
		<br />
    </div>





<footer class="text-center" style="background-color:  #174340 ; color: antiquewhite; padding:16px 0px;" >
&copy;2016 W3Currency. All rights reserved.
</footer>



</body>

</html>
