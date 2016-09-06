<?php

$products = array(
    'pm' => array(
        'name' => 'Perfect Money',
        'sell' => '34',
        'buy' => '38',
        'img' => 'images/PMoney2.jpg'
    ),
    'bc' => array(
        'name' => 'Bitcoin',
        'sell' => '21465',
        'buy' => '19270',
        'img' => 'images/Bitcoin.png'
    ),
    'sk' => array(
        'name' => 'Skrill',
        'sell' => '34',
        'buy' => '37',
        'img' => 'images/Skrill.png'
    ),
    'nt' => array(
        'name' => 'Neteller',
        'sell' => '34',
        'buy' => '37',
        'img' => 'images/Neteller.png'
    ),
    'up' => array(
        'name' => 'UnionPay',
        'sell' => '32',
        'buy' => '36',
        'img' => 'images/Neteller.png'
    ),
);

if(!isset($_GET['p']) && !isset($_POST['name'])){
    header("Location: index.php");
    exit();
}

$flag = 'no';
foreach ($products as $key => $value) {
    if ($_GET['p']==$key) {
        $flag = 'yes';
    }
}

//echo $flag;
if ($flag == 'no' && !isset($_POST['name'])){
    header("Location: index.php");
    die();
}


//print_r($products[$_GET['p']]['name']);
//die();



if (isset($_POST['name'])){
	require 'PHPMailer-master/PHPMailer-master/PHPMailerAutoload.php';

	$mail = new PHPMailer;

	$mail->isSMTP();

	//Ask for HTML-friendly debug output
	$mail->Debugoutput = 'html';

	//Set the hostname of the mail server
	$mail->Host = '	vps.adsplo.com';
	$mail->Port = 465;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "admin@w3currency.com";
	$mail->Password = "admin@123";
	$mail->setFrom('admin@w3currency.com', 'W3Currency Admin');
	$mail->addReplyTo('admin@w3currency.com', 'W3Currency Admin');

	$mail->addAddress('alan_98797@hotmail.com');
	$mail->Subject = 'Transaction request';
	$mail->msgHTML('<pre>'.

	json_encode($_POST).'</pre>');
	$mail->AltBody = json_encode($_POST);

	if (!$mail->send()) {
	    $msg = "Mailer Error: " . $mail->ErrorInfo;
	} else {
	    $msg = "Request created!";
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
<script>
	<?php if(isset($msg)){ ?>
		alert('<?php echo $msg ?>');
	<?php } ?>

	var products = JSON.parse('<?php echo json_encode($products); ?>');

	$(document).ready(function(){

		$('#platform, #transaction_type').change(function(){
			$.each(products, function(i,p){
				if(p.name == $('#platform').val()){
					console.log($('#transaction_type').val());
					$('#ex_rate').val(p[$('#transaction_type').val()]);
				}
			});
		});
		$.each(products, function(i,p){
			if(p.name == $('#platform').val()){
				$('#ex_rate').val(p[$('#transaction_type').val()]);
			}
		});
	});
</script>
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
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>



    <div class="container" style="min-height:calc( 100% - 123px );">
    <form class="form-horizontal" style="background: rgba(0,0,0,0.85); " action='<?php echo $_SERVER['PHP_SELF']?>?p=<?php echo $_GET['p'] ?>' method='post'>
    <fieldset>
    <div class="col-sm-12">

    <!-- Form Name -->
    <legend>Product</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="platform">Platform</label>
      <div class="col-sm-6 col-lg-4">
	  <select id="platform" name="platform" class="form-control input-md">
		  <?php foreach ($products as $key => $value) { ?>
			<option <?php if($value['name'] == $products[$_GET['p']]['name']) echo 'selected' ?>><?php print_r($value['name']);?></option>
		<?php } ?>
	  </select>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="transaction_type">Transaction Type</label>
      <div class="col-sm-6 col-lg-4">
      <select id='transaction_type' class='form-control'>
          <option value='buy'>Buy</option>
          <option value='sell'>Sell</option>
      </select>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="ex_rate">Exchange Rate</label>
      <div class="col-sm-6 col-lg-4">
      <input id="ex_rate" name="ex_rate" type="text" placeholder="" class="form-control input-md" disabled="" value=''>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="amount">Amount</label>
      <div class="col-sm-6 col-lg-4">
      <input id="amount" name="amount" type="number" placeholder="" class="form-control input-md" required="">
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="platform_email">Platform Email</label>
      <div class="col-sm-6 col-lg-4">
      <input id="platform_email" name="platform_email" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="message">Remarks</label>
      <div class="col-sm-6 col-lg-4">
        <textarea class="form-control" id="message" name="message" rows="5"></textarea>
      </div>
    </div>

    <!-- Form Name -->
    <legend>Personal Details</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="name">Name</label>
      <div class="col-sm-6 col-lg-4">
      <input id="name" name="name" type="text" placeholder="your name" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="ic">ID Card number</label>
      <div class="col-sm-6 col-lg-4">
      <input id="ic" name="ic" type="text" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="phone">Contact</label>
      <div class="col-sm-6 col-lg-4">
      <input id="phone" name="phone" type="text" placeholder="mobile phone no." class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="email">Email</label>
      <div class="col-sm-6 col-lg-4">
      <input id="email" name="email" type="text" placeholder="email address" class="form-control input-md" required="">
      <span class='help-block text-danger'>* Transaction fee of 25 Baht will be charged on each transaction.</span>

      </div>
    </div>


    <!-- Button -->
    <div class="form-group">
      <!-- <label class="col-sm-4 control-label" for=""> </label> -->
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
