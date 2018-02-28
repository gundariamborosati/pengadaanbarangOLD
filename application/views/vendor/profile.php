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
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">

      <tr>
        <th>Akte pendiri</th>
        <th>Nama Perusahaan</th>
        <th>Alamat Perusahaan</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Username</th>
      </tr>
      <tr>
        <td><?php echo $akte_pendiri ?></td>
        <td><?php echo $nama_perusahaan ?></td>
        <td><?php echo $alamat_perusahaan ?></td>
        <td><?php echo $contact ?></td>
        <td><?php echo $email ?></td>
        <td><?php echo $username?></td>
      </tr>
  </table>
</div>

</body>
</html>