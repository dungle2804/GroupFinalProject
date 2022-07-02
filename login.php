<?php 
require('top.php');
?>
<!-- Sign up form -->
<section class="signup">
	<div class="container">
		<div class="signup-content">
			<div class="signup-form">
				<h2 class="form-title">Sign up</h2>
				<form method="POST" class="register-form" id="register-form">
					<div class="form-group">
						<label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
						<input type="text" name="name" id="name" placeholder="Your Name"/>
					</div>
					<div class="form-group">
						<label for="email"><i class="zmdi zmdi-email"></i></label>
						<input type="email" name="email" id="email" placeholder="Your Email"/>
					</div>
					<div class="form-group">
						<label for="pass"><i class="zmdi zmdi-lock"></i></label>
						<input type="password" name="pass" id="pass" placeholder="Password"/>
					</div>
					<div class="form-group">
						<label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
						<input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
					</div>
					<div class="form-group">
						<input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
						<label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
					</div>
					<div class="form-group form-button">
						<input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
					</div>
				</form>
			</div>
			<div class="signup-image">
				<figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
				<a href="#" class="signup-image-link">I am already member</a>
			</div>
		</div>
	</div>
</section>



        

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js">
    </script>
    <script src="index_js.js" async></script>
<?php require('footer.php')?>    


		<!-- Start Contact Area -->
        <!-- <section class="htc__contact__area ptb--100 bg__white">
            <div class="container">
                <div class="row">
					<div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h2 class="title__line--6">Login</h2>
								</div>
							</div>
							<div class="col-xs-12">
								<form id="contact-form" action="#" method="post">
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="name" placeholder="Your Email*" style="width:100%">
										</div>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="name" placeholder="Your Password*" style="width:100%">
										</div>
									</div>
									
									<div class="contact-btn">
										<button type="submit" class="fv-btn">Login</button>
									</div>
								</form>
								<div class="form-output">
									<p class="form-messege"></p>
								</div>
							</div>
						</div> 
                
				</div>
				

					<div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h2 class="title__line--6">Register</h2>
								</div>
							</div>
							<div class="col-xs-12">
								<form id="contact-form" action="#" method="post">
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="name" placeholder="Your Name*" style="width:100%">
										</div>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="name" placeholder="Your Email*" style="width:100%">
										</div>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="name" placeholder="Your Mobile*" style="width:100%">
										</div>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="name" placeholder="Your Password*" style="width:100%">
										</div>
									</div>
									
									<div class="contact-btn">
										<button type="submit" class="fv-btn">Register</button>
									</div>
								</form>
								<div class="form-output">
									<p class="form-messege"></p>
								</div>
							</div>
						</div> 
                
				</div>
					
            </div>
        </section> -->