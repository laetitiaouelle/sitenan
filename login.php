<?php require('files/header.php'); ?>

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">



<body id="login_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login">
		<aside>
			<figure>
				<a href="index.html"><img src="img/logo_NaN.png" width="230" height="100" data-retina="true" alt=""></a>
			</figure>
			  <form>
				<div class="access_social">
					<a href="#0" class="social_bt facebook">connexion avec Facebook</a>
					<a href="#0" class="social_bt google">Connexion avec Google</a>
				</div>
				<div class="divider"><span>Ou</span></div>
				<div class="form-group">
					<span class="input">
					<input class="input_field" type="email" autocomplete="off" name="email">
						<label class="input_label">
						<span class="input__label-content">Votre email</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="password" autocomplete="new-password" name="password">
						<label class="input_label">
						<span class="input__label-content">Votre mot de passe</span>
					</label>
					</span>
					<small><a href="#0">Mot de passe oublié ?</a></small>
				</div>
				<a href="#0" class="btn_1 rounded full-width add_top_60">Connexion</a>
				<div class="text-center add_top_10">Nouveau chez NaN ? <strong><a href="register.html">Inscrit toi !</a></strong></div>
			</form>
			<div class="copy">© 2018 NaN</div>
		</aside>
	</div>
	<!-- /login -->
		
	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>	
  
</body>
</html>