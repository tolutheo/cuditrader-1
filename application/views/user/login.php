<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="login_hero" class="minimal"></div>
	<section class="content content-centered content-auth">
		<h2>Hello! Please log in.</h2>
		<p class="subheading">We're happy you're here.</p>

		<?php
		/*
		<form autocomplete="on" id="login-form" class="login-form">
			<input type="text" id="email" placeholder="Email">
			<input type="password" id="password" placeholder="Password">

			<button class="button button-primary">
				<span class="button-label">Login</span>
			</button>
		</form>
		*/
	
	echo form_open(current_url(), 'autocomplete="on" id="login-form" class="login-form"');
		?>
		<div class="<?= !isset($_SESSION['message']) ?'form-message':'' ?> error">
			<i class="fa fa-exclamation-circle"></i><span class="form-message-label"><?= isset($_SESSION['message']) ? "<span style='color:black'>".$_SESSION['message']."</span>" : "" ?></span>
		</div>
	<?php
	echo form_error('email', '<div class="error">', '</div>');
	echo form_input('email', set_value('email'), "placeholder='Email'");
	echo form_error('password', '<div class="error">', '</div>');
	echo form_password('password', '', "placeholder='Password'");
	// echo form_button("login", "<span class='button-label'>Login</span>", "class='button button-primary' onclick='form.submit()'");
	// echo form_submit('submit', 'Login');
	?>
	<input type="submit" name="login" id="login" class='button button-primary' value="Login"/>
	<?php
	echo form_close();

		?>
		<div class="below" id="footer_hero">
			<a href="<?=base_url('auth/forgot_password') ?>" class="email-link">Lost your password?</a>
			<a id="registerlink" href="<?=base_url('auth/register') ?>">Sign up</a>

		</div>
	</section>
	</div>

	<section class="bottom-message">
		<p>Having trouble?
			<a href="#">See our Help Center</a>
		</p>
	</section>