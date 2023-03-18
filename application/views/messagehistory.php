<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Message Page</title>

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
    <a href= "<?php echo base_url(); ?>index.php/message/writemessage"><div> <button type="submit">Message</button> </a>
            
  </div>

  <div>
           
    <a href= "<?php echo base_url(); ?>index.php/myprofile/update"><div> <button type="submit">My Profile</button> </a>
  </div>
    

  <div style="text-align:center">
        <div class="col-lg-20 col-lg-offset-20">
               <br>
               <br>
               <br>
               <br>
               <br>
               Message History!
               <br>
               <br>
               <br>  
               <br>
               <br>
               <br>
        </div>
  </div>
  <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        text-align: left;
        padding: 8px;
        border: 1px solid black;
    }
    th {
        background-color: #ddd;
    }
    td:nth-child(2) {
        padding-left: 20px;
    }
  </style>

  <table>
    <thead>
      <tr>
         <th>Message</th>
         <th>Date</th>
      </tr>
    </thead>    
    <tbody>
      <?php foreach ($messages as $message): ?>
        <tr>
          
          <td> <?php echo $message['message']; ?></td>
          <td> <?php echo $message['message_date']; ?></td>
        </tr> 
       <?php endforeach; ?>
    </tbody>
  </table>  

     
     
      
     



     
      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>