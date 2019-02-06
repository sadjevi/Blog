<?php $title = "administration du site"; ?>
<?php ob_start() ?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

<div class="row medium-8 large-7 columns">

	<form action="index.php?action=logInto" method="post">
	  <div class="form-icons">
	    <h4>Connexion à l espace d'administration</h4>

	    <div class="input-group">
	      <span class="input-group-label">
	        <i class="fa fa-user"></i>
	      </span>
	      <input class="input-group-field" type="text" placeholder="Login" name="login">
	    </div>

	    <div class="input-group">
	      <span class="input-group-label">
	        <i class="fa fa-key"></i>
	      </span>
	      <input class="input-group-field" type="text" placeholder="Password" name="password">
	    </div>
	  </div>

	  <button class="button expanded">Sign Up</button>
	</form>

</div>

<?php $content =  ob_get_clean(); ?>
<?php require('View/Frontend/template.php'); ?>


