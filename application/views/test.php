g<html>
<head>
<title>DIAGRAMME DE GANTT</title>
<?php $this->load->view('page_header'); ?>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>
<script type="text/javascript">
function(input){

     function switchEls(idx){

      var switched = false;

       if(input[idx] < input[idx-1]){

        var tmp = input[idx];
        input[idx] = input[idx-1];
        input[idx-1] = tmp;
        switched = true; 

       }
       return switched;
     }

     var switched;
     do {
      switched = false;

      for (var i = 1; i<input.length; i++){
         switched |= switchEls(i);
      }
 } while (switched);

 return input;

}

</script>
<style>
 body{
    
    background-color: grey;
     }
    h1 {

    color: white;
    font-family: monospace;
      }
</style>

</head>
<body>

 <h1>Welcome to my page</h1>

<?php
  for($i = 1; $i<=10; $i++){

    echo "Hello world <>br/";
  }
?>
</body>
</html>