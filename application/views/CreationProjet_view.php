<html>
<head>
<title>CREATION DU NOUVEAU PROJET</title>
<?php $this->load->view('page_header'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#dDateDebut" ).datepicker();
    $( "#dDateFin" ).datepicker();
  });
  </script>

</head>
<body>

<div id="container">
<form action="http://localhost/CI/index.php/CreationProjet" method="post" accept-charset="utf-8"><hr>
 
<h1> <CENTER>CREATION DU NOUVEAU PROJET<CENTER> </h1>
<hr/>
<?php if (isset($message)) { ?> <?php } ?>

<center> <?php echo form_label('Budget du projet :'); ?> <?php echo form_error('dBudget'); ?><br />
         <?php echo form_input(array('id' => 'dBudget', 'name' => 'dBudget')); ?><br /> </center>

<center> <?php echo form_label('Date debut du projet :'); ?> <?php echo form_error('dDateDebut'); ?><br />
<?php echo form_input(array('id' => 'dDateDebut', 'name' => 'dDateDebut')); ?><br /> </center>

<center> <?php echo form_label('date fin du projet :'); ?> <?php echo form_error('dDateFin'); ?><br />
<?php echo form_input(array('id' => 'dDateFin', 'name' => 'dDateFin')); ?><br /> </center>

<center> <?php echo form_label('Nom du projet :'); ?> <?php echo form_error('dNom'); ?><br />
<?php echo form_input(array('id' => 'dNom', 'name' => 'dNom')); ?><br /> </center>

<center> <?php echo form_label('Description du projet'); ?> <?php echo form_error('dDescription'); ?><br />
<?php echo form_input(array('id' => 'dDescription', 'name' => 'dDescription')); ?><br /> </center>

<center> <?php echo form_label('Departement du projet :'); ?> <?php echo form_error('dDepartementProjet'); ?> 
<?php //echo form_input(array('id' => 'dDepartementProjet', 'name' => 'dDepartementProjet')); ?><br />  </center>

<center> <?php echo "<select name='dDepartementProjet' Id='dDepartementProjet'>"; ?>
<?php  foreach ($departements as $list) {
        echo "<option value='". $list->departementID . "'>" . $list->nom_dept . "</option>"; }
        /*echo form_input(array('id' => 'dChefProjet', 'name' => 'dChefProjet'));*/ ?><br /> <br /> </center> 
<?php echo "</select >"; ?> 
<br /> 
<?php echo form_label('Chef du projet'); ?> <?php echo form_error('dChefProjet');  ?><br /> 
<?php echo form_input(array('id' => 'dChefProjet', 'name' => 'dChefProjet')); ?><br /> <br />

<?php echo form_submit(array('id' => 'valider', 'value' => 'valider')); ?>
<?php echo form_close(); ?><br/>
<div id="fugo">


</div>
</div>
 <?php $this->load->view('page_footer'); ?>
</body>
</html>