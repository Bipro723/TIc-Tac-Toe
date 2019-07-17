<?php

if (isset($_POST['One'])) {
    $FinalVal = $_POST['One'];
    setcookie("Destination_Selection", $FinalVal, time() + (2 * 60 * 60));
    setcookie("bookingStage", 1, time() + (2 * 60 * 60), '/~mlynch7/finalProject');
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>Decoders</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="views/css/Style.css">
</head>

<body>
<center>
    <div class="divtop">
        <h1>Tic Tac Toe</h1>
        <br>
        <br>
        
        
        <ul style="list-style-type:none;" class="ulnav">
            <li class="linav"><a href="views/index.html">Play Game</a></li>
            <li class="linav"><a href="https://github.com/malynch7/Web-Programming-Final-Project">GitHub</a></li>
            <li class="linav"><a href="index.php?action=logout">Log out</a></li>
        </ul>
    </div>
</center>
<br>
<h1 align="center" style="color=red;">Welcome</h1>
<br>
<br>
<br>
<br>

<hr>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<html>
