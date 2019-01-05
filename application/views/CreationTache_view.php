<html>
<head>
<title>CREATION DU NOUVEAU TACHE</title>
<?php $this->load->view('page_header'); ?>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#dDateDebutTache" ).datepicker();
    $( "#dDateFinTache" ).datepicker();
  });
  </script>

</head>
<body>

<div id="container">
<form action="http://localhost/CI/index.php/CreationTache" method="post" accept-charset="utf-8"><hr>
<div class="container">
      <div class="page-header">
        <h1> <CENTER>CREATION DU NOUVEAU TACHE<CENTER></h1>
      </div> 
      <div class="jumbotron" >
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>

<?php } ?>
<CENTER><?php echo form_label('Createur du tache :'); ?> <?php echo form_error('dCreateurTache'); ?><br />
<?php echo form_input(array('id' => 'dCreateurTache', 'name' => 'dCreateurTache')); ?><br /></CENTER>

<CENTER><?php echo form_label('Date debut du tache :'); ?> <?php echo form_error('dDateDebutTache'); ?><br />
<?php echo form_input(array('id' => 'dDateDebutTache', 'name' => 'dDateDebutTache')); ?><br /></CENTER>

<CENTER><?php echo form_label('Date fin du tache'); ?> <?php echo form_error('dDateFinTache'); ?><br />
<?php echo form_input(array('id' => 'dDateFinTache', 'name' => 'dDateFinTache')); ?><br /></CENTER>

<CENTER><?php echo form_label('Nom du tache :'); ?> <?php echo form_error('dNomTache'); ?><br />
<?php echo form_input(array('id' => 'dNomTache', 'name' => 'dNomTache')); ?><br /></CENTER>

<CENTER><?php echo form_label('Charge initial'); ?> <?php echo form_error('dDureeTache'); ?><br />
<?php echo form_input(array('id' => 'dDureeTache', 'name' => 'dDureeTache')); ?><br /></CENTER>

<CENTER><?php echo form_label('Titre de projet'); ?>  <?php echo form_error('dIdProjet'); ?> <br />
<?php      echo "<select name='dIdProjet' Id='dIdProjet'>"; ?>

 <?php   foreach ($projets as $list) {
       echo "<option value='". $list->projetID . "'>" . $list->projetID . "</option>";  }   ?>

<?php echo "</select><br/>"; ?><br /> <br /></CENTER>
</div>
<!--<form action="http://localhost/CI/index.php/Verifylogin" method="post" accept-charset="utf-8"> -->
<CENTER><button type="submit" class="btn btn-danger" role="button"> creer </button> 
<!--<?php echo form_submit(array('id' => 'creer', 'value' => 'creer')); ?>-->

<?php echo form_close(); ?><br/></CENTER>

</div> 
<?php $this->load->view('page_footer'); ?>
</body>
</html>