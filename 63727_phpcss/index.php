<?php
$title = "PHPファイルでフォントCSS呼び出し";
$header = "PHPファイルでフォントCSS呼び出し";
$nav = "menu";
?>
<html>
<head>
        <meta charaset="utf-8">
        <title><?php echo $title ?></title>

        <link rel="stylesheet" type="text/css" href="font/font.css">
    </head>
<body>
        <div class="header" frameborder="no" style="position:fixed;">
            <div class="content">
                <?php echo $header; ?>
            </div>
        </div>
        <div class="nav">
            <?php echo $nav; ?>
        </div>
        <div class="content">

        </div>
        <p>サンプル文字列は「<span class="myFontClass">dddd</span>」です。</p>
    </body>
</html>
