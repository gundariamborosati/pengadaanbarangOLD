<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Data Profile</h2>
  <table class="table table-bordered">
      <thead>
        <?php foreach($profile as $user):?>
        <tr>
            <th>Akte pendiri</th>
            <td><?php echo $user['akte_pendiri']; ?></td>
        </tr>
        <tr>
            <th>Nama perusahaan</th>
            <td><?php echo $user['nama_perusahaan']; ?></td>
        </tr>
        <tr>
            <th>Alamat perusahaan</th>
            <td><?php echo $user['alamat_perusahaan']; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $user['email']; ?></td>
        </tr>
        <tr>    
            <th>Contact</th>
            <td><?php echo $user['contact']; ?></td>  
        </tr>
        <tr>
            <th>Username</th>
            <td><?php echo $user['username']; ?></td>
        </tr>  
        <?php endforeach; ?>
    </thead>
  </table>

</div>

</body>
</html>
