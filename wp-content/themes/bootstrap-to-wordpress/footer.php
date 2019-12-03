<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>


<?php wp_footer(); ?>

<!-- SIGN UP SECTION
====================================================== -->
<section id="signup" data-type="background" data-speed="4">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h2>Are you ready to take your coding skills to the <strong>next level</strong> ?</h2>
				<p>
					<a href="#" class="btn btn-lg btn-block btn-success">Yes, sign me up</a>
				</p>
			</div>
				<!-- col-sm-5 offset3 -->
		</div>
			<!-- row -->
	</div>
		<!-- container -->
</section>

<!-- FOOTER
	====================================================== -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<p>
					<a href="/"><img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/logo.png" alt="B2W"></a>
				</p>
			</div>
				<!-- col-sm-3 -->
			<div class="col-sm-6">
				<nav>
					<ul class="list-unstyled list-inline">
						<li><a href="">Home</a></li>
						<li><a href="">Blog</a></li>
						<li><a href="">Resorces</a></li>
						<li><a href="">Contact</a></li>
						<li class="signup-link"><a href="">Sign Up</a></li>
					</ul>
				</nav>
			</div>
				<!-- col-sm-6 -->
			<div class="col-sm-3">
				<p class="pull-right">&copy;2019 Obada</p>
			</div>
				<!-- col-sm-3 -->
		</div>
			<!-- Row -->
	</div>
		<!-- Container -->
</footer>

<!-- MODAL
	====================================================== -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="model-header">
				<button class="close" type="button" data-dismiss="modal"><span aria-hidden="true">&times;</span> <span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to Our Mailing list</h4>
			</div>
			<!-- end of model-header div -->
			<div class="modal-body">
				<p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em></p>
			</div>
			<!-- end of model-body div -->
			<form role="form" action="" class="form-inline">
				<div class="form-group">
					<label for="subscribe-name" class="sr-only">Your first subscribe-name</label>
					<input type="text" class="form-control" id="subscribe-name" placeholder="Your first name ...">
				</div>
				<!-- form-group first name -->
				<div class="form-group">
					<label for="subscribe-email" class="sr-only">Your first subscribe-email</label>
					<input type="email" class="form-control" id="subscribe-email" placeholder="and your email ...">
				</div>
				<!-- form-group email -->
				<input type="submit" class="btn btn-danger" value="Subscribe!">
			</form>
			<hr>
			<p><small>By Providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br> No Spamp. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
		</div>
		<!-- end of modal-content div -->
	</div>
	<!-- end of modal-dialog div -->
</div>
<!-- endof modal div -->

<!-- BOOTSTRAP CORE JAVASCRIPT
====================================================== -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="<?php bloginfo('template_directory') ?>/assets/js/jquery-3.4.1.min.js"></script>

<script src="<?php bloginfo('template_directory') ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/main.js"></script>

</body>
</html>
