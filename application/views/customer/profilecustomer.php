<html>
<head>
    <title><?php echo $profilecustomer; ?></title>
</head>
<body>
    <h1>Daftar User</h1>
    <table border="1">
        <thead>
        <tr>
            
            <th>Username</th>
            <th>nama perusahaan</th>
            <th>alamat perusahaan</th>
            <th>contact</th>
            <th>npwp</th>
          
        </tr>
    </thead>
    <tbody>
            <?php foreach($profile as $user):?>
                <tr>
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['nama_perusahaan']; ?></td>
              <td><?php echo $user['alamat_perusahaan']; ?></td>
              <td><?php echo $user['contact']; ?></td>
            <!--  <td><img  src='".base_url('upload/'.$user->npwp)."'></td>  -->
             <td><img  src='<?=base_url()?>upload/<?=$user->npwp;?>'></td> 
        </tr>
           <?php 
           endforeach; 
           ?>

    </tbody>
    </table>
</body>
</html>
