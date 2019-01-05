<html>
<head>
<title>LISTE DES RESSOURCES </title>
<?php $this->load->view('page_header'); ?>

<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
</head>
<body>
<h1> 
<CENTER>LISTE DES RESSOURCES<CENTER>
</h1>
<hr/>

<div id="container">
                                                 
<table>
<tr>
<td>Age </td> 
<td>Nom  </td>
<td>Prenom </td>
<td>Images </td>
</tr>

<?php foreach($utilisateur as $row): ?>
<tr>
<td><?php echo $row->age; ?></td>
<td><?php echo $row->nom; ?></td>
<td><?php echo $row->prenom; ?></td>
<td><img src="http://localhost/CI/images/logo_mediating.png" border="1"> </td> 
<td> <a href="SupprimerUser">Supprimer</a> </td>
<td> <a href="ModifierUser">Modifier</a> </td>

</tr>
<?php endforeach; ?>

</table>


<?php if (isset($message)) { ?>

<?php } ?>

<a href="Inscription">Creer ressource</a>
<div id="fugo">

</div>
</div>
<?php $this->load->view('page_footer'); ?>
</body>
</html>