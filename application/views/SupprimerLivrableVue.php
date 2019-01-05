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
<?php foreach ($livrables as $livrable): ?>
<li><a href="<?php echo base_url() . "index.php/GestionLivrable/show_livrable_id/" .$livrable->lIVRABLEID; ?>"><?php echo $livrable->Description; ?></a>
</li>  
<?php endforeach; ?>
</ol>
</div>
<div id="detail">
<!--====== Displaying Fetched Details from Database ========-->
<?php foreach ($single_livrable as $livrable): ?>

<?php echo $livrable->Date_livraison; ?>
<?php echo $livrable->Description; ?>
<?php echo $livrable->catégoriesID; ?>
<?php echo $livrable->projetID; ?>
<!--====== Delete Button ========-->
<a href="<?php echo base_url() . "index.php/GestionLivrable/supprimerLivrable/" . $livrable->lIVRABLEID; ?>">
<button>Supprimer</button></a>
<?php endforeach; ?>
</div>
</div>
</div>
</body>
</html>