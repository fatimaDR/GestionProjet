<!DOCTYPE html>
<html>
<head>
<title>Delete Data From Database Using CodeIgniter</title>
<!--=========== Importing Google fonts ===========-->
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url()?>./css/delete.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="container">
<div id="wrapper">
<div id="menu">
<!--====== Displaying Fetched Names from Database in Links ========-->
<ol>
<?php foreach ($projets as $projet): ?>
<!--<li><a href="<?php echo base_url() . "index.php/SupprimerProjet_Controle/show_projet_id/" .$projet->projetID; ?>"><?php echo $projet->nom; ?></a>
</li>  --> 
<?php endforeach; ?>
</ol>
</div>
<div id="detail">
<!--====== Displaying Fetched Details from Database ========-->
<?php foreach ($single_projet as $projet): ?>

<?php echo $projet->budget; ?>
<?php echo $projet->date_debut; ?>
<?php echo $projet->date_fin; ?>
<?php echo $projet->nom; ?>
<?php echo $projet->description; ?>
<?php echo $projet->departementID; ?>
<?php echo $projet->chef_Projet; ?>
<!--====== Delete Button ========-->
<a href="<?php echo base_url() . "index.php/SupprimerProjet_Controle/supprimerProjet/" . $projet->projetID; ?>">
<button>Supprimer</button></a>
<?php endforeach; ?>
</div>
</div>
</div>
</body>
</html>