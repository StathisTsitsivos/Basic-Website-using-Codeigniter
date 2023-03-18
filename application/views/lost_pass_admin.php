
<!doctype html>
<html lang="en">


  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Lost Pass Page</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div style="text-align:center">
        <div class="col-lg-20 col-lg-offset-20">
               <br>
               <br>
               <br>
               <br>
                 Lost Pass?
                <br>
                Entry here your email and we will send you a link to generate your pass again!
                <br>
                <br>
                <br>  
                <br>
                <br>
                <br>
        </div>
  </div>

  <a href= "<?php echo base_url(); ?>index.php/auth_admin/lost_pass"></a>

  
   
       <div style="text-align:center">
        <div class="col-lg-20 col-lg-offset-20">
        <div class="form-group">
            <label for="email" >Email:</label>
            <input class="form-cotrol" name="email" id="email" type="text">
        </div> 

        <div>
            <button type="submit">Remind Me</button>
        </div>   