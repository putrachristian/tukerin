<!DOCTYPE html>
<html>
<head>
	<title>Register Tukerin</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

    <?php $this->load->view('header'); ?>

	<div class ="container" style="margin-top: 100px;">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				
						<h1 class="text-center login-title">Sign Up</h1>
						<div class="accessbox bre3 br4 rel">
							<div class="inner">
								<form class="form-signup" action="/action_page.php">
									<div class="form-group">
                                        <label for="username">Username:</label>
                                        <input type="username" class="form-control" placeholder="Username" id="username" required autofocus>
                                    </div>
									<div class="form-group">
								    	<label for="email">E-mail:</label>
								    	<input type="email" class="form-control" placeholder="E-mail" id="email" required autofocus>
								  	</div>
								  	<div class="form-group">
								    	<label for="pwd">Password:</label>
								    	<input type="password" class="form-control" placeholder="Password" id="pwd" required>
								  	</div>
                                    <div class="form-group">
                                        <label for="pwd">Confirm Password:</label>
                                        <input type="password" class="form-control" placeholder="Confirm Password" id="pwd" required>
                                    </div>
								  	<button type="submit" class="btn btn-success">Register</button>
								  	
								</div>
				  				</form>
					  			
							</div>
							
						</div>
			</div>
		</div>
  	</div>
	
</body>

<style type="text/css">
	.form-signup
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