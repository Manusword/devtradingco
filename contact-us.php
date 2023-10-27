<?php 
if(isset($_REQUEST['submit']) and isset($_REQUEST['name']) and isset($_REQUEST['email']) and isset($_REQUEST['subject']) and isset($_REQUEST['message']))
{
	$name = $_REQUEST['name'];
	$sender_email = $_REQUEST['email'];
	$subject = $_REQUEST['subject'];
	$message = $_REQUEST['message'];


	$to_email = 'sales@devtradingco.in';
	$email_body = 'You Have Received a Message <br><br> From ' . $name . ' <br><br>'  .  ' <br><br>EMAIL : ' .$sender_email  . '  <br><br>Subject : ' .$subject. " <br/>";
	$email_body.=$message;
	
	$subject = "Mail From Website";
	$txt = $email_body;
	
	$header = 'Content-type: text/html; charset=utf-8' . "\r\n";
	$header .= 'From: ' . $name . " <" . $sender_email . "> \r\n";
	
	//admin
	

	try 
	{
		mail($to_email,$subject,$txt,$header);
		$msg="Mail Send";
	}
	//catch exception
	catch(Exception $e) 
	{
		//$msg= 'Message: ' .$e->getMessage();
	}

	//sender
	try 
	{
		mail($email,"Thank you for contact us.","Thank you for contact us. We will text you in future.",$header);
		//$msg="Mail Send";
	}
	//catch exception
	catch(Exception $e) 
	{
		//$msg= 'Message: ' .$e->getMessage();
	}
	
	
}
else
{
	$msg="";
}

include_once('header.php');


?>
	

			<div role="main" class="main">


			<section class="page-header page-header-classic page-header-sm">
					<div class="container">
						<div class="row">
							<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
								<h1 data-title-border>Contact Us</h1>
							</div>
							<div class="col-md-4 order-1 order-md-2 align-self-center">
								<ul class="breadcrumb d-block text-md-right">
									<li><a href="#">Home</a></li>
									<li class="active">Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="googlemaps" class="google-map mt-0" style="height: 500px;"></div>

				<div class="container">

					<div class="row py-4">
						<div class="col-lg-6">

							<div class="overflow-hidden mb-1">
								<h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><strong class="font-weight-extra-bold">Contact</strong> Us</h2>
								<h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><strong class="font-weight-extra-bold" style="color:red;"><?php echo $msg;?></strong> </h2>
							</div>
							<div class="overflow-hidden mb-4 pb-3">
								<p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Feel free to ask for details, don't save any questions!</p>
							</div>

							<form class="contact-form" action="contact-us.php" method="POST">
								<div class="contact-form-success alert alert-success d-none mt-4">
									<strong>Success!</strong> Your message has been sent to us.
								</div>
							
								<div class="contact-form-error alert alert-danger d-none mt-4">
									<strong>Error!</strong> There was an error sending your message.
									<span class="mail-error-message text-1 d-block"></span>
								</div>
								
								<div class="form-row">
									<div class="form-group col-lg-6">
										<label class="required font-weight-bold text-dark text-2">Full Name</label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
									</div>
									<div class="form-group col-lg-6">
										<label class="required font-weight-bold text-dark text-2">Email Address</label>
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="font-weight-bold text-dark text-2">Subject</label>
										<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="required font-weight-bold text-dark text-2">Message</label>
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" required></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" name="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
									</div>
								</div>
							</form>

						</div>
						<div class="col-lg-6">

							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
								<h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
								<ul class="list list-icons list-icons-style-2 mt-2">
									<li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> Dev trading Co. Opp. Power House Manesar, Gurgaon (122051)</li>
									<li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong>9711182935,8010482935</li>
									<li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:sales@devtradingco.in">sales@devtradingco.in</a></li>
								</ul>
							</div>

							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
								<h4 class="pt-5">Business <strong>Hours</strong></h4>
								<ul class="list list-icons list-dark mt-2">
									<li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 9pm</li>
									<li><i class="far fa-clock top-6"></i> Saturday - 9am to 9pm</li>
									<li><i class="far fa-clock top-6"></i> Sunday - 9am to 9pm</li>
								</ul>
							</div>

							<h4 class="pt-5">Get in <strong>Touch</strong></h4>
							<p class="lead mb-0 text-4"></p>

						</div>

					</div>

				</div>

			</div>

			


<?php 
include_once('footer.php');
?>