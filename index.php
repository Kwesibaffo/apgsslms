<?php include('header.php'); ?>
<style>
  .input100 {
    font-family: Poppins-Regular;
    font-size: 15px;
    color: #555555;
    line-height: 1.2;

    display: block;
    width: 100%;
    height: 45px;
    background: transparent;
    padding: 0 5px;
  }
</style>
  <body id="login" style="background-image: url('images/bg.jpg')">
    <div class="container">

      <form id="login_form" class="form-signin" method="post" style="max-width: 400px !important; height: 480px;background:rgba(255,255,255,0.5)!important">
       <center> <h3 class="form-signin-heading"><i class="icon-lock"></i> ADMIN LOGIN</h3></center>
        <center>
        <img src="images/logo.png" width="110px" height="110px">
      </center> <br><br>
        <div class="row" style="width:80%!important;margin:0 auto;">
        <div class="col-md-12">
        <input type="text" class="input-block-level input100" id="usernmae" name="username" placeholder="Username" required>
        <input type="password" class="input-block-level" id="password" name="password" placeholder="Password" required>
        <button name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-"></i> Sign in</button>
		</div>

	</div>

		      </form>
		
		
	<center><p style="color: white;">ALL RIGHT RESERVED &copy; <?php echo date("Y");?></p></center>

    </div> <!-- /container -->
<?php include('script.php'); ?>
  </body>
</html>