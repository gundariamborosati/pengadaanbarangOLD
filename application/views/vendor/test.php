<!DOCTYPE html>
<html lang="en">
<head>
  <title>Setting profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <?php foreach($profile as $user): ?>
<div class="container">
  <h2>Setting Profil</h2>
  <form class="form-horizontal" action="updateProfile">
    <div class="panel panel-default">
      <div class="panel-heading">Change Profile</div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Akte Pendiri:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="akte_pendiri" value="<?php echo $user['akte_pendiri']; ?>" >
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Nama Perusahaan:</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" name="nama_perusahaan" value="<?php echo $user['nama_perusahaan']; ?>">
          </div>
        </div>   
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Alamat Perusahaan:</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" name="alamat_perusahaan" value="<?php echo $user['alamat_perusahaan']; ?>">
          </div>
        </div>   
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Email:</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" name="email" value="<?php echo $user['email']; ?>">
          </div>
        </div>   
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Contact:</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" name="contact" value="<?php echo $user['contact']; ?>">      
          </div>
        </div>   
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Username:</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" name="Username" value="<?php echo $user['username']; ?>">      
          </div>
        </div>       
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<?php endforeach; ?>
</body>
</html>