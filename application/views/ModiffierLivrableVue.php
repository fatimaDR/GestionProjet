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
<?php foreach ($livrables as $livrable): ?> <!--($students as $student) -->
 <li><a href="<?php echo base_url() ."index.php/GestionLivrable/show_livrable_id2/" . $livrable->lIVRABLEID; ?>"><?php echo $livrable->Description; ?></a></li>  
<?php endforeach; ?>
</ol>
</div>
<div id="detail">
<!-- Fetching All Details of Selected Student From Database And Showing In a Form -->
<?php foreach ($single_livrable2 as $livrable): ?>

<form method="post" action="<?php echo base_url() . "index.php/GestionLivrable/update_livrable_id1"?>">
<label>Date du livraison :</label>
<input type="text" name="dDateLivraison" value="<?php echo $livrable->Date_livraison; ?>">
<label>Description :</label>
<input type="text" name="dDescription" value="<?php echo $livrable->Description; ?>">
<label>Categorie :</label>
<input type="text" name="dcatégoriesID" value="<?php echo $livrable->catégoriesID; ?>">
<label>Titre du projet :</label>
<input type="text" name="dProjet" value="<?php echo $livrable->projetID; ?>">
<input type="submit" id="submit" name="dsubmit" value="Modifier">
</form>
<?php endforeach; ?>
</div>
</div>
</div>
</body>
</html>