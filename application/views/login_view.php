<!DOCTYPE html>

<html>
<head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form</title>
     <!--link the bootstrap css file-->
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
     <?php $this->load->view('page_header'); ?>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css">
     <!--<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>bootstrap/css/bootstrap-theme.css" />-->
     <style type="text/css">
     .colbox {
          margin-left: 0px;
          margin-right: 0px;
     }

        </style>
  </head>
<body>
  <form action="http://localhost/CI/index.php/Verifylogin" method="post" accept-charset="utf-8"> 
  <br/>
<CENTER>
     <div class="container">
      <div class="page-header">
        <h1> Authentification</h1>
      </div> 
     <div class="jumbotron" >
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <br/>
     </div>
     <button type="submit" class="btn btn-danger" role="button"> connexion </button> <br />
     <!--input type="submit" value="Inscription"/-->
     <!--a href="inscription" class="bouton-relief">Index</a-->
   </form>
   <br/>
   <form action="http://localhost/CI/index.php/Inscription" method="post" accept-charset="utf-8"> 
   <button type="submit" class="btn btn-danger" role="button"> Inscription </button>
   </form>
   </div>
  </CENTER>
    <?php $this->load->view('page_footer'); ?>

</body>
</html>
