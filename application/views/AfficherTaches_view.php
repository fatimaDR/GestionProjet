<html>
<head>
<title>LISTE DES TACHES </title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css">
<?php $this->load->view('page_header'); ?>

</head>
<body>
	<div class="container">
      <div class="page-header">
        <h1> <CENTER>LISTE DES TACHES<CENTER></h1>
      </div>
    </div>
<CENTER>
<form>
<?php 
echo "<p><label for='taches'>Titre de projet: </label>";  
echo "<select  name ='choix' id='Id' onchange='myFunction()'  >"  ?> 
 <option value=-1>-- Choisissez projet -- </option>

 <?php   foreach ($projets as $list) {
        echo "<option value='". $list->projetID . "'>" . $list->nom . "</option>";  }  ?>

<?php echo "</select>"; ?><br /> <br />
<p id="demo"></p> 
<!--<a href="TablesTaches">Afficher les taches</a>  -->
<br/>
<br/>
<!--<input type="submit" value="Afficher"> -->
<!--<a href="CreationTache">Creer Taches <br/></a> <br/> -->
</form>
</CENTER> 
<CENTER>
<form action="http://localhost/CI/index.php/CreationTache" method="post" accept-charset="utf-8">
<button type="submit" class="btn btn-danger" role="button"> Creer Taches </button>

</CENTER>
<table border="1">
<script>

function myFunction() {
    var x = document.getElementById("Id").value;
    document.getElementById("demo").innerHTML = "Vous avez selectionné  : " + x;
   window.location.href="TablesTaches/afficherTaches/"+ x ;
  
}
</script>
 
<?php $this->load->view('page_footer'); ?>
</body>
</html>