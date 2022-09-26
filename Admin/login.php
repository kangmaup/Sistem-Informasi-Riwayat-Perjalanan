 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
  <?php 

    include 'navbarcetak.php';

     ?>
 	<div class="login">
  <h3 align="center">Silahkan Login</h2>
  </div>
  <form method="post"  autocomplete="off">
    <div class="input-group">
      <center><img src="user.png" width="100px"></center>
    <label>Username</label>
    <input type="text" name="username">
    </div>

    <div class="input-group">
    <label>Password</label>
    <input type="password" name="password">
    </div>

    <div>
    <center><button name="login" class="button">Login</button></center>
    </div>
    <br>
    <br>
    
  </form>

 	<?php
  include 'koneksi.php';
  session_start();
 	if (isset($_POST["login"])) {
      $user=addslashes($_POST["username"]);
      $pass=addslashes($_POST["password"]);
      $ambil = $koneksi->query("SELECT*FROM admin WHERE username='$user' AND password='$pass'");  
          $yangcocok = $ambil->num_rows;
          if ($yangcocok==1) {
            $_SESSION['admin'] = $ambil->fetch_assoc();
           echo "<div class='alert alert-info'>Login Sukses</div>";
           echo "<meta http-equiv='refresh' content='1;url=index.php'>"; 
           
          }
          else{
            echo "<div class='alert alert-danger'>Login Gagal</div>";
           /*echo "<meta http-equiv='refresh' content='1;url=login.php'>"; */
          
          }
         }
          ?>
          
 	
 </body>
 </html>