<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: grey;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.container {
    margin-top: 100px;
    padding: 16px;
    width: 30%;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
}
</style>
<body>
<form action="<?php echo base_url('c_user/login');?>" method="post">
  <div class="container">
    <label><b>Username*</b></label>
    <input type="text" name="username" required placeholder="Enter Username">

    <label><b>Password*</b></label>
    <input type="password"  name="password" required placeholder="Enter Password" >
        
    <button type="submit">Login</button>
  </div>
    <?php echo $this->session->flashdata('message');?>
     <?php
        if($this->session->flashdata('pesan') <> ''){
        ?>
          <div class="alert alert-danger fade in">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <?php echo $this->session->flashdata('pesan');?>
          </div>
        
    <?php
        }
    ?> 

</form>
