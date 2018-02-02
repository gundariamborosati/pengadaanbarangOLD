<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form method="get" action="<?php echo base_url().'c_logistik/view_akun' ?>">
<div class="container">
  <center><h2>Profile</h2> </center>        
  <table class="table">
    <thead>
      <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Edit</th>
      </tr>
    </thead>
    <?php foreach($logistik as $l){?>
    <tbody>
      <tr>        
        <td><?php echo $l->username; ?></td>
        <td><?php echo $l->password; ?></td>
        <td></td>
      </tr>
    </tbody>
    <?php } ?>
  </table>
</div>
</form>
</body>
</html>
