<html>
<head>
<title>CREATION DU SUIVI</title>
<?php $this->load->view('page_header'); ?>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $("#dDateSuivi").datepicker();  
  });
  </script>

</head>
<body>
<?php foreach ($taches as $ChargeTache): ?>

<form method="post" action="<?php echo base_url() . "index.php/Suivi/". $ChargeTache->tachesID?>">
<?php endforeach; ?>  
<!--<form action="http://localhost/CI/index.php/Suivi" method="post" accept-charset="utf-8"><hr>-->
<div class="container">
      <div class="page-header">
        <h1> <CENTER>CREATION DU SUIVI<CENTER></h1>
      </div> 
      <div class="jumbotron" >
<?php if (isset($message)) { ?>

<?php } ?>

<CENTER><label>Charge initial :</label><br />
<input type="text" name="dCharge" value="<?php echo $id; ?>"></CENTER>

<CENTER><?php echo form_label('Reste :'); ?> <?php echo form_error('dReste'); ?><br />
<?php echo form_input(array('id' => 'dReste', 'name' => 'dReste')); ?><br /></CENTER>

<CENTER><?php echo form_label('Travail'); ?> <?php echo form_error('dTravail'); ?><br />
<?php echo form_input(array('id' => 'dTravail', 'name' => 'dTravail')); ?><br /></CENTER>

<CENTER><?php echo form_label('DateSuivi'); ?> <?php echo form_error('dDateSuivi'); ?><br />
<?php echo form_input(array('id' => 'dDateSuivi', 'name' => 'dDateSuivi')); ?><br /></CENTER>

<CENTER><?php echo form_label('Affectation de ressource'); ?>  <?php echo form_error('dIdAffectation'); ?> <br />
<?php echo "<select name='dIdAffectation' Id='dIdAffectation'>"; ?>

 <?php   foreach ($affectations as $list) {
       echo "<option value='". $list->affectationID . "'>" . $list->affectationID . "</option>";  }   ?>

<?php echo "</select><br/>"; ?><br /> </CENTER>

<CENTER><?php echo form_label('Taux avancement'); ?> <?php echo form_error('dTAvancement'); ?><br />
<?php echo "<select name='dTAvancement' >"; ?><br /></CENTER>
<OPTION>-- Choisissez le pourcentage ---</OPTION> 
<OPTION>10%</OPTION>
<OPTION>20%</OPTION>
<OPTION>30%</OPTION>
<OPTION>40%</OPTION>
<OPTION>50%</OPTION>
<OPTION>60%</OPTION>
<OPTION>70%</OPTION>
<OPTION>80%</OPTION>
<OPTION>90%</OPTION>
<OPTION>100%</OPTION>
<?php echo "</select><br/>"; ?><br /> </CENTER>
</div>
<!--<form action="http://localhost/CI/index.php/Verifylogin" method="post" accept-charset="utf-8"> -->
<CENTER><button type="submit" class="btn btn-danger" role="button"> Valider </button> 
<!--<?php echo form_submit(array('id' => 'creer', 'value' => 'creer')); ?>-->

<?php echo form_close(); ?><br/></CENTER>

</div> 
<?php $this->load->view('page_footer'); ?>
</body>
</html> 