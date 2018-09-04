<?php require('files/header.php'); ?>


<body id="register_bg">
	
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
			<form autocomplete="off">
				<div class="form-group">

					<span class="input">
					<input class="input_field" type="text">
						<label class="input_label">
						<span class="input__label-content">Votre Nom</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="text">
						<label class="input_label">
						<span class="input__label-content">Votre prénom</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="email">
						<label class="input_label">
						<span class="input__label-content">Votre mail</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="password" id="password1">
						<label class="input_label">
						<span class="input__label-content">Votre mot de passe</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="password" id="password2">
						<label class="input_label">
						<span class="input__label-content">Confirmez le mot de passe</span>
					</label>
					</span>
					
					<div id="pass-info" class="clearfix"></div>
				</div>
				<a href="#0" class="btn_1 rounded full-width add_top_30">Créer le compte NaN</a>
				<div class="text-center add_top_10">Vous avez déjà un compte ? <strong><a href="login.html">Connexion ici</a></strong></div>
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
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="js/pw_strenght.js"></script>
  
</body>
</html>