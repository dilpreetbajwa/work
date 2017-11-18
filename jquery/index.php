<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bootstrap Example</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		
		<div class="container">
			<div class="row">
				
				<div class="col-md-6">
					<form method="post">
						<div class="form-group">
							<label>Email address:</label>
							<input type="email" class="form-control" id="email" required>
						</div>
						<div class="form-group">
							<label>Password:</label>
							<input type="password" class="form-control" id="pwd" required>
						</div>
						<a class="btn btn-default" onclick="formSend()">Submit</a>
					</form>
				</div>
				
			</div>
		</div>
		
		
		<script>
			/* jQuery(document).ready(function() {
				getData();
			}); */
			function formSend(){
				var email = jQuery('#email').val();
				var pwd = jQuery('#pwd').val();
				
				jQuery.ajax({
					url: "ajax.php?email="+email+"&pwd="+pwd,
					type: "get",
					data: [],
					success: function (response) {
						console.log(response);
					},
					error: function(jqXHR, textStatus, errorThrown) {
						console.log(textStatus, errorThrown);
					}
				});
			}
		</script>
		
		
	</body>
</html>
