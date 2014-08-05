<!DOCTYPE HTML>
<html>
<head>
    <!-- This does not include the <title> tage, which is inside the actual content pages... Yeah, this is not kosher, but it actually works. Statically. -->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="author" content="Jean-François Fortin Tam"/>
    <meta name="revisit-after" content="5 days" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />

    <link href="http://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans+Mono" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <link href="GStreamer.css" rel="stylesheet" type="text/css" />
    <!-- Allow feed readers to pick up our Planet feed from any page !-->
	<link rel="alternate" type="application/atom+xml" title="Planet GStreamer Atom 1.0" href="http://gstreamer.net/planet/atom.xml">

<body>

<header>
    <nav id="menu">
            <span style="float:right; color: red;">BETA™</span>
        <div id="logotype">
            <a href="/" title="Go back to the home page"><img src="images/gstreamer-logo.svg" alt="logo" /></a>
        </div>

    <?php include("menu.html"); ?>
    </nav>
</header>



<!-- Contents go here -->
<div id="page">
<?php
    if(isset($_GET['go'])){
        # Prevent remote URLs. PHP's default config should block this,
        # but let's be on the safe side.
        if (eregi("http", $_GET['go'])){
            echo "You can't have a pony.";
            }
        else{
            include("page_" . $_GET['go'] . ".html");
            }
        }
    else{
        include("page_home.html");
        }
?>
</div>


<footer>
<?php if (!isset($_GET['go']) or $_GET['go'] == "contact"){
    include("footer.html");
    }
?>
</footer>

</body>
</html>
