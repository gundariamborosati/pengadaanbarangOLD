<style>
/* Full-width input fields */
 {
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

<h2><center>Add Barang</center></h2>
    <form action="<?php echo base_url('c_vendor/registrasi');?>" method="post">
    <div class="container">

    
        <label><b>Id barang</b></label>
        <input type="text" value="" name="id_barang" disabled>
    	
        <br>
    	<label><b>Gambar</b></label>
        <input type="file" placeholder="chosee file" name="gambar" 	value="" required>
     
        <br>
        <label><b>Nama barang</b></label>
        <input type="text" value="" name="nama_barang" value="">

        <br>
    	<label><b>Jenis Barang</b></label>
        <input type="text" placeholder="" name="jenis_barang" 	value="" required>

      <div class="clearfix">
        <button type="submit" class="signupbtn">Tambah</button>
      </div>
    </div>
    </form>
