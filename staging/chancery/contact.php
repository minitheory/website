<?php
$bodyClass = 'contact-page';
$thisPage = 'contact';
$title = "Contact Us - Chancery LLC";
include_once 'header.php';

?>
	<div class="banner">
		<img class="banner-image" src="images/banner-pebbles.jpg"/>
	</div>

	<div class="row main">
		<div class="twelve columns">
			<div class="row">
				<div class="twelve columns">
					<h1>Contact us</h1>
				</div>
			</div>
			<div class="row">
				<div class="twelve columns page-content">
					<div class="row">
						<div class="six columns">
							<form method="post" action="contact-success.php">
								<div class="row">
									<div class="twelve columns">
										<label for="contact-name">Your Name:</label>
										<input id="contact-name" name="contact-name" type="text" class="textbox">
									</div>
								</div>
								<div class="row">
									<div class="six columns">
										<label for="contact-company">Company:</label>
										<input id="contact-company" name="contact-company" type="text" class="textbox">
									</div>
									<div class="six columns">
										<label for="contact-email">Your Email:</label>
										<input id="contact-email" name="contact-email" type="text" class="textbox">
									</div>
								</div>
								<div class="row">
									<div class="twelve columns">
										<label for="contact-message">Your Message:</label>
										<textarea id="contact-message" name="contact-message"></textarea>
									</div>
								</div>
								<input type="submit" class="button" value="Send message"/>
							</form>
						</div>
						<div class="six columns">
							<ul class="contact-info">
								<li>
									<strong>Address</strong><span>55 Market Street, #08-01<br/>Singapore 048 941</span>
									<img src="images/ico-address.png"/>
								</li>
								<li>
									<span>
										<strong>Phone</strong>+65 6236 9350 (Corporate)<br/>
										<strong>&nbsp;</strong>+65 6236 9358 (Dispute)
									</span>
									<img src="images/ico-phone.png"/>
								</li>
								<li>
									<strong>Fax</strong>+65 6532 9937
									<img src="images/ico-fax.png"/>
								</li>
								<li>
									<strong>Email</strong><a href="mailto:info@chanceryllc.com">info@chanceryllc.com</a>
									<img src="images/ico-email.png"/>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
<?php
include_once 'subfooter.php';
include_once 'footer.php';
?>