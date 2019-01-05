<html>
<head>
<title>Detailles de projet </title>

<?php $this->load->view('page_header'); ?>

<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body >
<h1> 
<CENTER>DETAILLES DE PROJET <CENTER>
</h1>
<hr/>

<div id="container">
<center>
<form id="formulaire" method="post" action="">
<?php foreach($projets as $row): ?>
<label for="budget">budget du projet :<?php echo $row->budget; ?></label><br /><br />
<label for="dated">date debut :<?php echo $row->date_debut; ?></label> <br /><br />  
<label for="datef">Date fin :<?php echo $row->date_fin; ?></label><br /><br />
<label for="Nom">Nom :<?php echo $row->nom; ?></label><br /><br />
<label for="Description">Description :</label> <textarea name="ameliorer" id="ameliorer"><?php echo $row->description; ?></textarea> <br /><br />
<label for="Id">Id du projet :<?php echo $row->projetID; ?></label><br /><br />
<label for="Departement">Departement :<?php echo $row->departementID; ?></label><br /><br />
<label for="Chef">Chef du projet :<?php echo $row->chef_Projet; ?></label> <br /><br />   
</center>

<!--<tr>
 <td><?php echo $row->budget; ?></td> 
 <td><?php echo $row->date_debut; ?></td>  
 <td><?php echo $row->date_fin; ?></td>  
 <td><?php echo $row->nom; ?></td>
 <td><?php echo $row->description; ?></td>  
 <td><?php echo $row->projetID; ?></td>    
 <td><?php echo $row->departementID; ?></td> 
 <td><?php echo $row->chef_Projet; ?></td>
<?php endforeach; ?> -->



<br/><br/>

<form>
<div id="fugo">

</div>
</div>

 <?php $this->load->view('page_footer'); ?>
</body>
</html>
