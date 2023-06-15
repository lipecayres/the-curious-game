<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is a curious game test">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="./css/style.css">
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

    <main>
        <div class="container">
            <h1>Are you curious? </h1>
            <h2>Register to discover who are curious</h2>

            <form action="" method="POST" id="myForm" autocomplete = "off">
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
            if(isset($_POST) & !empty($_POST)){
                $fname = $_POST['fname'];
                $city = $_POST['city'];
                $res   = $database->create($fname, $city);
                if($res){
                    echo "<p>Access authorized. <a href='view.php'style='color:aquamarine;' style='text-decoration:none;'> Click here to see other curious.</a> </p>";
                }else{
                    echo "<p>Failed to insert data</p>";
                }
            }
        ?>

    </main>

    <footer>
        <?php
            include("includes/bottom-bar.php");
        ?>
    </footer>
    <script src="./js/script.js"></script>
</body>

</html>