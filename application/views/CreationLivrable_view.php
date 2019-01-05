<html>
<head>
<title>CREATION DU NOUVEAU LIVRABLE</title>
<?php $this->load->view('page_header'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#dDateLivraison" ).datepicker();
  });
  </script>

</head>
<body>

<div id="container">
<form action="http://localhost/CI/index.php/GestionLivrable/CreationLivrable" method="post" accept-charset="utf-8"><hr>
 
<h1> <CENTER>CREATION DU NOUVEAU PROJET<CENTER> </h1>
<hr/>
<?php if (isset($message)) { ?> <?php } ?>

<center> <?php echo form_label('Date du livraison :'); ?> <?php echo form_error('dDateLivraison'); ?><br />
         <?php echo form_input(array('id' => 'dDateLivraison', 'name' => 'dDateLivraison')); ?><br /> </center>

<center> <?php echo form_label('Description :'); ?> <?php echo form_error('dDescription'); ?><br />
<?php echo form_input(array('id' => 'dDescription', 'name' => 'dDescription')); ?><br /> </center>

<center> <?php echo form_label('Categorie du livraison :'); ?> <?php echo form_error('dCategorie'); ?>
<!--<?php echo form_input(array('id' => 'dCategorie', 'name' => 'dCategorie')); ?><br /> --> </center>
<center> <?php echo "<select name='dCategorie' Id='dCategorie'>"; ?>
<?php  foreach ($categories as $list) {
        echo "<option value='". $list->catégoriesID . "'>" . $list->Description . "</option>"; }
        /*echo form_input(array('id' => 'dChefProjet', 'name' => 'dChefProjet'));*/ ?><br /> <br /> </center> 
<?php echo "</select >"; ?> 
<br />
<center> <?php echo form_label('Titre du projet :'); ?> <?php echo form_error('dProjet'); ?> 
<?php //echo form_input(array('id' => 'dDepartementProjet', 'name' => 'dDepartementProjet')); ?><br />  </center>

<center> <?php echo "<select name='dProjet' Id='dProjet'>"; ?>
<?php  foreach ($projetsid as $list) {
        echo "<option value='". $list->projetID . "'>" . $list->nom . "</option>"; }
        /*echo form_input(array('id' => 'dChefProjet', 'name' => 'dChefProjet'));*/ ?><br /> <br /> </center> 
<?php echo "</select >"; ?> 
<br /> 
<?php echo form_submit(array('id' => 'valider', 'value' => 'valider')); ?>
<?php echo form_close(); ?><br/>
<div id="fugo">
</div>
</div>
 <?php $this->load->view('page_footer'); ?>
</body>
</html>