<html>
<head>
<title>LISTE DES PROJETS </title>

<?php $this->load->view('page_header'); ?>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!--<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/> -->
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color:lightgrey;">
<div class="container">
<div class="page-header">
<h1>  <CENTER>LISTE DES PROJETS<CENTER> </h1>
</div>
<div class="row">

<div class="col-md-6 col-md-ofset-6">

<div id="container">
<table class=" table table-bordered table-striped table-hover">
<!--<tr> -->
<thead>
	<tr>
   <td colspan="11"></td>
    </tr>
</thead>
<tbody>
	<tr class="success">
 
 <th class="text-center">date debut</th>   
 <th class="text-center">date fin</th>    
 <th class="text-center">Nom</th>
 <th class="text-center">Description</th>     
 <th class="text-center">Departemen</th>  
 <th class="text-center">Suppression</th>  
 <th class="text-center">Modification</th>
 <th class="text-center">Affichage</th>
</thead>

<?php foreach($projets as $row): ?>
 <thead > 
 <th class="danger"><?php echo $row->date_debut; ?></th>  
 <th class="info"><?php echo $row->date_fin; ?></th>  
 <th class="danger"><?php echo $row->nom; ?></th>                         
 <th class="info"><?php echo $row->description; ?></th>      
 <th class="danger"><?php echo $row->departementID; ?></th> 
 <!--<td><img src="http://localhost/CI/images/supp.png" border="1"></td> -->
 <td><img src="http://localhost/CI/images/supp.png" border=""><a href="SupprimerProjet_Controle/supprimerProjet/<?php echo $row->projetID; ?>">X</a> <br/></td> 
 <!--<td><a href=""><img src="http://localhost/CI/images/supp.png" border=""></a> <br/></td>
 <!-- <td><img src="http://localhost/CI/images/modifier.png" border=""></td>-->
 <td><a href="GestionProjet/show_projet_id/<?php echo $row->projetID; ?>"><img src="http://localhost/CI/images/modifier.png" border=""></a> <br/></td>
 <td><a href="Details_Projet/afficherProjet/<?php echo $row->projetID; ?>">Details Projet</a> <br/></td> 
</thead>
</div>
<?php endforeach; ?>
</table>

<br/><br/>
<a href="CreationProjet">Creer Projet <br/></a> <br/>
<div id="fugo">

</div>
</div>

 <?php $this->load->view('page_footer'); ?>
 
</body>
</html>