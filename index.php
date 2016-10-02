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
$mail->msgHTML("name:$_POST[name]<br />phone:$_POST[phone]<br />email:$_POST[email]<br />message:$_POST[message]<br />");

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    // echo "Message sent!";
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
            <li class="active"><a href="index.php"><font color= #40e0d0 size="4px">Home</font></a></li>
            <li><a href="service.php">Our Service</a></li>
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


<style>a.overlay{text-decoration: none !important;}</style>
    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">

         <br />
		<center>
			<img src='images/logo.jpeg' style="width: 25%;"/>
		</center>
        <h1>W3Currency <?php
$member['upline_ids'] = 'liucina,jeffyong,junie111,ocw111,ads01,';
		if(strpos($member['upline_ids'], 'jeffyong') !== false && strpos($member['upline_ids'], 'jeffyong') !== false) echo '2'; else echo '1' ?></h1>
        <p> BEST PRICE IN TOWN <?php echo intval(strpos($member['upline_ids'],'jeffyong')) ?></p>

          <!-- <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
		  SELECT sum(amount) as count FROM `wallet_transaction` where account_name = 'ocw111' and description like '%director%' and account_name_2 in ('liucina','zjl1688','ztx1688','liushouna','luckygirl','luoye')

		  SELECT id, account_name, account_name_2, amount, created_at FROM `wallet_transaction` where account_name = 'ocw111' and description like '%director%' and account_name_2 in ('zjl1688','ztx1688','liushouna','luckygirl','luoye')

	  -->
        <br />
      </div>

    </div> <!-- /container -->



<div class="container">
<div class="row">

  <div class="col-md-3 col-sm-4 col-xs-12 imgholder">
    <div class="hovereffect">
      <a href='product.php?p=pm'><img class="img-responsive" src="images/PMoney2.jpg" alt="Perfect_Money"></a>

       <a class="overlay" href='product.php?p=pm'>
                <!-- <h2>Perfect Money</h2> -->
          <p>
              Perfect money
          </p>
          <small>
			  Buy: THB 34.00/USD<br />
Sell: THB 38.00/USD<br />
			  Buy: MYR 3.80/USD<br />
Sell: MYR 4.35/USD<br />
          </small>

	  </a>
      </div>
  </div>


  <div class="col-md-3 col-sm-4 col-xs-12 imgholder">
    <div class="hovereffect">
    <a href='product.php?p=bc'><img class="img-responsive" src="images/Bitcoin.png" alt="Bitcoin"></a>

            <a class="overlay" href='product.php?p=bc'>
                <!--<h2>Bitcoins</h2>-->
          <p>
            Bitcoins
          </p>
          <small>
			  Buy : THB 19,270/BTC<br />
  Sell: THB 21,465/BTC<br />
  			  Buy: MYR 2,455/USD<br />
  Sell: MYR 2,525/USD<br />
          </small>
	  </a>
    </div>
  </div>

  <div class="col-md-3 col-sm-4 col-xs-12 imgholder">
    <div class="hovereffect">
    <a href='product.php?p=sk'><img class="img-responsive" src="images/Skrill.png" alt="Skrill"></a>

            <a class="overlay" href='product.php?p=sk'>
                <!-- <h2>Skrill</h2> -->
          <p>
             Skrill
          </p>
          <small>
			  Buy: THB 34.00/USD<br />
 Sell: THB 37.00/USD<br />
 			  Buy: MYR 3.80/USD<br />
 Sell: MYR 4.35/USD<br />
          </small>
	  </a>
    </div>
  </div>

  <div class="col-md-3 col-sm-4 col-xs-12 imgholder">
    <div class="hovereffect">
     <a href='product.php?p=nt'><img class="img-responsive" src="images/Neteller.jpg" alt="Neteller"></a>

            <a class="overlay" href='product.php?p=nt'>
                <!-- <h2>Neteller</h2> -->
          <p>
             Neteller
          </p>
          <small>
			  Buy: THB 34.00/USD<br />
 Sell: THB 37.00/USD<br />
 			  Buy: MYR 3.80/USD<br />
 Sell: MYR 4.35/USD<br />
          </small>
	  </a>
    </div>
  </div>
  <!-- </div>

  <div class="row"> -->
  <div class="col-md-3 col-sm-4 col-xs-12 imgholder">
    <div class="hovereffect">
    	<a href='product.php?p=up'><img class="img-responsive" src="images/unionpay.jpg" alt="Neteller"></a>

        <a class="overlay" href='product.php?p=up'>
                <!-- <h2>Neteller</h2> -->
          <p>
             UnionPay
          </p>
          <small>
			  Buy: THB 32.00/USD<br />
			  Sell: THB 36.00/USD<br />
			  Buy: MYR 3.90/USD<br />
			  Sell: MYR 4.2/USD<br />
          </small>
	  	</a>
    </div>
  </div>

</div> <!-- row collapse -->

</div> <!-- container collapse -->

<br></br>

<!--form-->
<div class="container" >
<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']?>" method = "post" style="background: rgba(0,0,0,0.85); ">
<fieldset>
<div class="col-sm-12">

<!-- Form Name -->
<legend>Inquiry</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-sm-4 control-label" for="name">Name</label>
  <div class="col-sm-6 col-lg-4">
  <input id="name" name="name" type="text" placeholder="your name" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-sm-4 control-label" for="phone">Contact</label>
  <div class="col-sm-6 col-lg-4" >
  <input id="phone" name="phone" type="text" placeholder="mobile phone no." class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-sm-4 control-label" for="email">Email</label>
  <div class="col-sm-6 col-lg-4">
  <input id="email" name="email" type="text" placeholder="email address" class="form-control input-md" required="">

  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-sm-4 control-label" for="message">Message</label>
  <div class="col-sm-6 col-lg-4">
    <textarea class="form-control" id="message" name="message" rows="5" required=""></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <div class="col-sm-offset-4 col-sm-4 text-center">
    <button type="submit" class="btn btn-5 btn-5b fa-send"><span>Send</span></button>
  </div>
</div>


<!--col-sm-12 collapse -->
</div>


</fieldset>
</form>

</div>


<footer class="text-center" style="background-color:  #174340 ; color: antiquewhite; padding:16px 0px;" >
&copy;2016 W3Currency. All rights reserved.
</footer>

</body>

 </html>
