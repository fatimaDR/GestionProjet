<html>
<head>
<title>LISTE DES LIVRABLES </title>

<?php $this->load->view('page_header'); ?>

<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
</head>
<body style="background-color:lightgrey;">

<h1>  <CENTER>LISTE DES LIVRABLES</CENTER> </h1>

<hr/>

<div id="container">
<form action="http://localhost/CI/index.php/GestionLivrable/AffivherLivrable" method="post" accept-charset="utf-8"><hr>
<CENTER>
<table border="1" >
<tr>

<thead>
 <th>Date livraison</th> 
 <th>Description</th>   
 <th>Catégories</th>    
 <th>Titre de projet</th> 
 <th>Suppression</th>  
 <th>Modification</th>
</thead>

<?php foreach($livrables as $row): ?>
 <thead>
 <th><?php echo $row->Date_livraison; ?></th> 
 <th><?php echo $row->Description; ?></th>  
 <th><?php echo $row->catégoriesID; ?></th>  
 <th><?php echo $row->projetID; ?></th>                         
 
 <!--<td><img src="http://localhost/CI/images/supp.png" border="1"></td> -->
 <td><img src="http://localhost/CI/images/supp.png" border=""><a href="supprimerLivrable/<?php echo $row->lIVRABLEID; ?>">Supprimer</a> <br/></td> 
 <!--<td><a href=""><img src="http://localhost/CI/images/supp.png" border=""></a> <br/></td>
 <!-- <td><img src="http://localhost/CI/images/modifier.png" border=""></td>-->
 <td><a href="show_livrable_id2/update_livrable_id1/<?php echo $row->lIVRABLEID; ?>">Modifier</a> <br/></td>
 <!--<td><a href="Details_Projet/afficherProjet/<?php echo $row->projetID; ?>">Details Projet</a> <br/></td> --> 
</thead>
<?php endforeach; ?>
</table>
</CENTER>
<br />
<CENTER><a href="CreationLivrable">Ajouter livrable</a></CENTER>
<br/><br/>
<div id="fugo">

</div>
</div>

 <?php $this->load->view('page_footer'); ?>
</body>
</html>