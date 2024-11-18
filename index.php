<?php
include("./includes/top-bar.php");
?>

<div class="container">
    <h1>Are you curious? </h1>
    <h2>Register to discover who are curious</h2>

    <form action="" method="POST" id="myForm" autocomplete="off">
        <div class="form-control">
            <input type="text" name="fname" required>
            <label for="fname"> Name </label>
        </div>
        <div class="form-control">
            <input type="text" name="city" required>
            <label for="city"> City </label>
        </div>
        <button class="btn" onclick="submitForm()">Click to check</button>
    </form>
</div>

<?php
require_once('database.php');
if (isset($_POST) & !empty($_POST)) {
    $fname = $_POST['fname'];
    $city = $_POST['city'];
    $res = $database->create($fname, $city);
    if ($res) {
        echo "<p>Access authorized. <a href='view.php'style='color:aquamarine;' style='text-decoration:none;'> Click here to see other curious.</a> </p>";
    } else {
        echo "<p>Failed to insert data</p>";
    }
}
?>


<?php
include("includes/bottom-bar.php");
?>