<html>
<head>
<title>INSCRIPTION DES UTILISATEURS</title>
<?php $this->load->view('page_header'); ?>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
</head>
<body>

<div class="container">
<form action="http://localhost/CI/index.php/Inscription" method="post" accept-charset="utf-8"><hr>
<h1> 
<CENTER>INSCRIPTION DES UTILISATEURS<CENTER>
</h1>

 
<CENTER><?php echo form_label('Age :'); ?> <?php echo form_error('dage'); ?><br />
<?php echo form_input(array('id' => 'dage', 'name' => 'dage')); ?><br /></CENTER>

<CENTER><?php echo form_label('Nom :'); ?> <?php echo form_error('dnom'); ?><br />
<?php echo form_input(array('id' => 'dnom', 'name' => 'dnom')); ?><br /></CENTER>

<CENTER><?php echo form_label('Prenom :'); ?> <?php echo form_error('dprenom'); ?><br />
<?php echo form_input(array('id' => 'dprenom', 'name' => 'dprenom')); ?><br /></CENTER>

<CENTER><?php echo form_label('Email :'); ?> <?php echo form_error('demail'); ?><br />
<?php echo form_input(array('id' => 'demail', 'name' => 'demail')); ?><br /></CENTER>

<CENTER><?php echo form_label('Mot de passe :'); ?> <?php echo form_error('dPassword'); ?><br />
<?php echo form_input(array('id' => 'dPassword', 'name' => 'dPassword')); ?><br /></CENTER>
<br/>
<CENTER><?php echo form_submit(array('id' => 'valider', 'value' => 'valider')); ?></CENTER>
<!--<button type="button" class="btn btn-primary">Valider</button>-->
<?php echo form_close(); ?><br/>
<div id="fugo">

</div>


 <?php $this->load->view('page_footer'); ?>
</body>
</html>