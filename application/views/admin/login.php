<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Hunger-Brigde Admin</title>
        <link rel="stylesheet" href="<?=base_url()?>assets/admin/css/style.css">
  </head>
  <body>
    <div class="wrapper">
	<div class="container">
		<h1>Welcome Hunger-Brigde Admin Panel</h1>
		<form class="form" method='post' action='<?=base_url()?>admin/login'>
			<input type="text" placeholder="Username" name="username" id="username">
			<input type="password" placeholder="Password" name="password" id="password">
			<button type="submit" id="login-button">Login</button>
		</form>
	</div>
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="<?=base_url()?>assets/admin/js/index.js"></script>
  </body>
</html>
