<html class="yui3-cssreset">
<?php
$title = "cssreset";
$header = "リセットCSSが呼び出されない。";
?>
<head>
        <meta charaset="utf-8">
        <title><?php echo $title ?></title>

        <link rel="stylesheet" type="text/css" href="cssreset-context-min.css">
        <!--
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset-context/cssreset-context-min.css">
        -->
        <link rel="stylesheet" type="text/css" href="header.css" media="all">
    </head>
    <body>
        <div class="header">
            <div class="content">
                <?php echo $header; ?>
            </div>
        </div>
        <div>
	         <div id="left-column" class="yui3-cssreset"><h1>Lorem Ipsum</h1></div>
	         <div id="right-column"><h1>Lorem Ipsum</h1></div>
        </div>
    </body>
</html>
