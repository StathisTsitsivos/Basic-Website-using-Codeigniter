
<!doctype html>
<html lang="en">
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
  <h1>Login</h1>
    <?php echo validation_errors(); ?>
    <?php echo $this->session->flashdata('login_failed'); ?>
    <?php echo form_open('Auth/login'); ?>
    <p>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="stathistuff@gmail.com">
    </p>
    <p>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="123456789">
    </p>
    <p>
        <button type="submit">Login</button>
    </p>
    <?php echo form_close(); ?>

    

    
  </body>
</html>