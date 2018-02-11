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
.cancelbtn,.signupbtn {float:left;width:50%}

/* Add padding to container elements */
.container {
    padding: 16px;
    width: 30%;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    color: #000;
    font-size: 40px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
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
    <?php echo form_open_multipart(base_url('c_vendor/registrasi')) ;?>"
    <div class="container">

    	<label><b>Registrasi</b></label>
      <input type="text" value="vendor" name="hak_akses" readonly="TRUE">
    	
        <br>
    	<label><b>Akte Pendiri</b></label>
       <br>
      <input type="file" placeholder="chosee file" name="akte_pendiri" 	value="" required>
      
      	<br>  
        <br>
    	<label><b>Nama Perusahaaan</b></label>
      <input type="text" placeholder="Nama Perusahaaan" name="nama_perusahaan" 	value="" required>
      
      <label><b>Alamat Perusahaaan</b></label>
      <input type="text" placeholder="Alamat Perusahaaan" name="alamat_perusahaan" 	value="" required>
      
      <label><b>Contact</b></label>
      <input type="text" placeholder="Contact" name="contact" value="" 	required>
      
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Email" name="username" value=""  required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" value=""	required>

      <div class="clearfix">
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
    </form>
