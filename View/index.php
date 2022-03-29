<?php
session_start();

if (isset($_GET['logout'])) {
    echo '<script>alert("Logout Successful")</script>';
}

if (isset($_GET['error'])) {
    echo '<script>
        document.getElementById("showContent").textContent="Log in First";
        </script>';
}
?>

<html>
<head>
    <link href="../css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css'/>
    <link href="../css/style.css" rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<div id="showContent"> </div>

<div>
    <?php include_once("header.php"); ?>
</div>


<div>
    <?php include_once("Sections/banner.php"); ?>
</div>

<div id="myNav" class="overlay">
  <div class="overlay-content">
    <div class="overlay-border">
    <div >
        <pre>
<h4>Cookies</h4></pre>
    </div>
    <div id="cookieconset">
     <h6>This website uses cookies in order to offer you the most releavnt information.
     please accept cookies for optimal performance
     </h6>
        <br>
     <button type="button" onclick="closeNav()" >Yes I accept!</button>
     <br>

    </div>

    </div>

  </div>
</div>




<div id="why_Us">
    <?php include_once("Sections/whyUs.php"); ?>
</div>

<script src="../JS/homepage.js"></script>
</body>


<footer id="con_Us">
    <?php include_once("footer.php"); ?>
</footer>

</html>