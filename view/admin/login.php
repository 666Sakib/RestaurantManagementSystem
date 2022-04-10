<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial scale =1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<link rel="stylesheet" href="../../control/header.css">
</head>
<body>
	<?php include_once '../header.php'; ?>

	<div class="container">
		<form name="f1" action="#" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login as admin</p>
			<div class="input-group">
				<label> UserName: </label>
				<input type="text" id="user" name="user" />
			</div>
			<div class="input-group">
				<label> Password: </label>
				<input type="password" id="pass" name="pass" />
			</div>
			<br>
			<div class="input-group">
				<input type="submit" id="btn" value="Login" />
			</div>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script>
		jQuery(document).ready(function($) {
			$('.login-email').on('submit', function(e) {
				e.preventDefault();
				var id = document.f1.user.value;
				var ps = document.f1.pass.value;
				if (id.length == "" && ps.length == "") {
					alert("User Name and Password fields are empty");
					return false;
				} else {
					if (id.length == "") {
						alert("User Name is empty");
						return false;
					}
					if (ps.length == "") {
						alert("Password field is empty");
						return false;
					}

					// do the ajax call
					jQuery.ajax({
						url: "authentication.php",
						type: "POST",
						data: {
							user: id,
							pass: ps
						},
						success: function(res) {
							let data = JSON.parse(res);
							if (data.status == "success") {
								window.location.href = "dashboard.php";
							} else {
								alert("Invalid User Name or Password");
							}
						}
					});
				}
			});
		});
	</script>
</body>

</html>