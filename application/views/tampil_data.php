<html>
<head>
  <title>Belajar JOIN Tabel Di CodeIgniter</title>
</head>
<body>
  <h1 align="center">Belajar CodeIgniter Di KiosCoding.com</h1>
  <h2 align="center">Tutorial Join 2 Tabel Berbeda Dengan CodeIgniter</h2>
  <table border="1" width="80%" align="center">
    <tr>
    <th> no </th>
      <th>NO pesanan</th>
      <th>username</th>
      <
    </tr>
    <?php
      $no = 1;
      foreach($data_users as $d){
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $d->no_pesanan ?></td>
      <td><?php echo $d->username ?></td>
      
    </tr>
  <?php } ?>
</body>
</html>
