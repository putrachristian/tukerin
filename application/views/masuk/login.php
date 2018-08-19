<!DOCTYPE html>
<html>
<head>
    <title>Login Tukerin</title>
    <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>">
</head>
<body>
    
    <?php $this->load->view('header'); ?>

	<div class ="container" style="margin-top: 100px;">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				
						<h1 class="text-center login-title">Sign In</h1>
						<div class="accessbox bre3 br4 rel">
							<div class="inner">
								<form class="form-signin" action="/action_page.php">
									<div class="form-group">
								    	<label for="email">E-mail:</label>
								    	<input type="email" class="form-control" placeholder="E-mail" id="email" required autofocus>
								  	</div>
								  	<div class="form-group">
								    	<label for="pwd">Password:</label>
								    	<input type="password" class="form-control" placeholder="Password" id="pwd" required>
								  	</div>
								  	<div class="checkbox">
								    	<label><input type="checkbox">Biarkan Saya Tetap Masuk</label>
								  	</div>
								  	<button type="submit" class="btn btn-primary">Masuk</button>
								  	<div class="text-foot"><br/>
								Belum Punya Akun? <a href="<?= site_url('admin/register'); ?>" class="register-link">Register</a>
								</div>
				  				</form>
					  			
							</div>
							
						</div>
			</div>
		</div>
  	</div>
	
</body>

<style type="text/css">
	.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 20px;
    padding: 40px 0px 20px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    color: #555;
    font-size: 25px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}


</style>
</html>