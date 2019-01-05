<html>
<head>
<title>LISTE DES PROJETS </title>

<?php $this->load->view('page_header'); ?>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
</head>
<body>
<div class="container">
      <div class="page-header">
        <h1><CENTER>LISTE DES TACHES<CENTER></h1>
      </div>
    </div>

<CENTER><table border="1">
<tr>

<td>Createur du taches</td>
<td>Date de debut </td>   
<td>Date de fin du taches</td>
<td>Nom du tache</td>   
<td>Duree du tache</td>  
<td>Titre de projet</td>
</tr>

<?php foreach($Taches as $row): ?>
<tr>
<td><?php echo $row->createur; ?></td> 
<td><?php echo $row->Date_debut; ?></td>  
<td><?php echo $row->Date_fin; ?></td>  
<td><?php echo $row->nom; ?></td>
<td><?php echo $row->Duree; ?></td>   
<td><?php echo $row->projetID; ?></td>
<!--<td><form action="http://localhost/CI/index.php/Suivi/CreationSuivi/" method="post" accept-charset="utf-8"> -->
<td><a href="<?php echo base_url() . "index.php/Suivi/CreationSuivi/". $row->Duree ?>" >Ajouter suivi</a> <br/></td> 
<!--<button type="submit" class="btn btn-danger" role="button"><a href="Suivi/CreationSuivi/<?php echo $row->Duree; ?>"> Ajouter suivi</a> </button> -->
</tr>
<?php endforeach; ?>

</table></CENTER>

<br/><br/>

 <?php $this->load->view('page_footer'); ?>
</body>
</html>