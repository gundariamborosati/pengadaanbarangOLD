<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
    width: 30%;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>
<h2><center>Registrasi</center></h2>
<?php echo form_open_multipart(base_url('c_customer/registrasi')) ;?>"

  <div class="container">
  <label><b>Registrasi</b></label>
      <input type="text" value="customer" name="hak_akses" readonly="TRUE">
  	
     <label><b>Npwp</b></label>
       <br>
      <input type="file" placeholder="chosee file" name="npwp"  value="" required>
      
    <label><b>Nama Perusahaan</b></label>
    <input type="text" placeholder="nama perusahaan" name="namaperusahaan" required><br>
    <label><b>Alamat Perusahaan</b></label>
    <input type="text" placeholder="alamat perusahaan" name="alamatperusahaan" required>
    <label><b>Contact</b></label>
    <input type="text" placeholder="contact" name="contact" required><br>
    <label><b>Username</b></label>
    <input type="text" placeholder="username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Password" name="password" required>
    
    <div class="clearfix">
 
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>

</form>

</body>
</html>
