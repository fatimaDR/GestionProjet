<!DOCTYPE html>
<html>
<head>
	<title>TP codeigniter</title>
</head>

   <body>


<!--  <h1>Bonjour</h1>

<p>
    Ce sont mes informations !!!
</p>
<p>
 Votre pseudo est <?php echo $pseudo; ?>.
</p>

<p>
  Votre email est <?php echo $email; ?>.
</p>

<p>
 <?php if($en_ligne): ?>
 	Vous etes en ligne.
 	<?php else: ?>
       Vous n etes pas en ligne
 		<?php endif; ?>
</p>   -->

<!--   <h1>
	Test
</h1>

<p>
	<a href="<?php echo site_url(); ?>">accueil</a>
	<br />
	
	<a href="<?php echo site_url('HomeControle'); ?>">accueil</a> du test
	<br />
	
	<a href="<?php echo site_url('HomeControle/secret'); ?>">page secrete</a>
	<br />
	
	<a href="<?php echo site_url(array('HomeControle', 'secret')); ?>">page secrete</a>
</p>

-->
<form method="post" action="">
	<label for="pseudo">Pseudo : </label>
	<input type="text" name="pseudo" value="" />

	<label for="mdp">Mot de passe :</label>
	<input type="password" name="mdp" value="" />

	<input type="submit" value="Envoyer" />
</form>

    </body>
</html>

