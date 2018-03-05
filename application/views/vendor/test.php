<!DOCTYPE html>
<html>
<head>
  <title>Setting</title>
</head>
<body>
  <?php foreach($profile as $user){ 
  ?>
 
    <table style="margin:20px auto;">
      <tr>
        <td>Userbane</td>
        <td><input type="text" name="username" value="<?php echo $u->username ?>"></td>
      </tr>
      <tr>
        <td>Nama perusahaan</td>
        <td><input type="text" name="nama_perusahaan" value="<?php echo $u->nama_perusahaan ?>"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
      </tr>
    </table>
  </form> 
  <?php } ?>
</body>
</html>