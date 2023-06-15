<?php
	require_once('database.php');
	$res = $database->read();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="This week we will be using OOP PHP to create our CRUD application">
	<meta name="robots" content="noindex, nofollow">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/style.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap"
		rel="stylesheet">

	<link rel="icon" href="./images/favicon.png" type="image/png">
	<title>The Curious Game | Who else is curious here?</title>
</head>

<body>

	<header>
		<?php
            include("./includes/top-bar.php");
        ?>
	</header>

	<div class="container">
		<div class="row">
			<table class="table" style="color:#fff;">
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>City</th>
				</tr>
				<?php
				while($r = mysqli_fetch_assoc($res)){
			?>
				<tr>
					<td>
						<?php echo $r['id']; ?>
					</td>
					<td>
						<?php echo $r['fname'] ?>
					</td>
					<td>
						<?php echo $r['city'] ?>
					</td>
				</tr>
				<?php
				}
			?>
			</table>
		</div>
	</div>

	<footer>
		<?php
			include("includes/bottom-bar.php");
		?>
	</footer>

</body>

</html>