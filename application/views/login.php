<!doctype html>
<html lang="en">
<style>
.container { 
  height: 300px;
  position: relative;
  border: 4px solid green; 
}

.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-70%);
  transform: translateY(-70%);
}
</style>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login Page</title>

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
    

    <div  style="text-align:center">
      <h1>Login Page:</h1>

      <p>Fill in the details to login on our website! <br> Hello Customer!</p>
      <?php if (isset($_SESSION['success'])) { ?>
          <div class="alert-alert-success"> <?php echo $_SESSION['success']; ?></div>
      <?php
      } ?>
      <form action="<?php echo base_url('index.php/Auth/login'); ?>"  method="POST"> 
      

        <div class="form-group">
            <label for="email" >Email:</label>
            <input class="form-cotrol" type="email" name="email" id="email" >
        </div> 

        <div class="form-group">
            <label for="password" >Password:</label>
            <input class="form-cotrol" type="password" name="password" id="password" >
        </div> 

        <div>
            <button type="submit">Login</button>
        </div>   
      
      </form>  
      <?php if($this->session->flashdata('error_msg')) {
        echo '<div class= "alert alert-danger">'. $this->session->flashdata('error_msg'). '</div>';
      }
       ?>
      <?php if($this->session->flashdata('form_validation_error')) {
        echo '<div class= "alert alert-danger">'. $this->session->flashdata('form_validation_error'). '</div>';
      }
       ?>

      
        <div>
            <a href= "<?php echo base_url(); ?>index.php/auth/register"><div> <button type="submit">New Account</button> </a>
            
        </div>   

        <div>
            <a href= "<?php echo base_url(); ?>index.php/auth/lost_pass"><div> <button type="submit">Lost my Pass</button> </a>
            
        </div>   

        <div>
            <a href= "<?php echo base_url(); ?>index.php/auth_admin/index"><div> <button type="submit">Admim</button> </a>
            
        </div> 

    </div>   
    
    
