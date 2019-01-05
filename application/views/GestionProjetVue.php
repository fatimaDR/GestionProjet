<html>
<head>
<title>Update Data In Database Using CodeIgniter</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(). "css/update.css" ?>">
</head>
<body>
<div id="container">
<div id="wrapper">
<div id="menu">
<!-- Fetching Names Of All Students From Database -->
<ol>
<?php foreach ($projets as $projet): ?> <!--($students as $student) -->
<!-- <li><a href="<?php echo base_url() ."index.php/GestionProjet/show_projet_id/" . $projet->projetID; ?>"><?php echo $projet->nom; ?></a></li>  -->
<?php endforeach; ?>
</ol>
</div>
<div id="detail">
<!-- Fetching All Details of Selected Student From Database And Showing In a Form -->
<?php foreach ($single_projet as $projet): ?>

<form method="post" action="<?php echo base_url() . "index.php/GestionProjet/update_projet_id1"?>">
<label>Budget :</label>
<input type="text" name="dBudget" value="<?php echo $projet->budget; ?>">
<label>Date debut :</label>
<input type="text" name="dDateDebut" value="<?php echo $projet->date_debut; ?>">
<label>Date fin :</label>
<input type="text" name="dDateFin" value="<?php echo $projet->date_fin; ?>">
<label>Nom :</label>
<input type="text" name="dNom" value="<?php echo $projet->nom; ?>">
<label>Description :</label>
<input type="text" name="dDescription" value="<?php echo $projet->description; ?>">
<label id="hide">Id :</label>
<input type="text" id="hide" name="did" value="<?php echo $projet->projetID; ?>">
<label>Departement :</label>
<input type="text" name="dDepartementProjet" value="<?php echo $projet->departementID; ?>">
<label>Chef :</label>
<input type="text" name="dChefProjet" value="<?php echo $projet->chef_Projet; ?>">
<input type="submit" id="submit" name="dsubmit" value="Modifier">
</form>
<?php endforeach; ?>
</div>
</div>
</div>
</body>
</html>