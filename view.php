<?php
include("./includes/top-bar.php");

require_once('database.php');
$res = $database->read();
?>

<div class="container">
	<div class="row">
		<table class="table" style="color:#fff;">
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>City</th>
			</tr>
			<?php
			while ($r = mysqli_fetch_assoc($res)) {
				?>
				<tr class = "hover-table">
					<td id="table-id">
						<?php echo $r['id']; ?>
					</td>
					<td id="table-fname">
						<?php echo $r['fname'] ?>
					</td>
					<td id="table-city">
						<?php echo $r['city'] ?>
					</td>
				</tr>
				<?php
			}
			?>
		</table>
	</div>
</div>


<?php
include("includes/bottom-bar.php");
?>