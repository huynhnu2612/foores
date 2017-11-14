<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/7000.less', 'css/7000.css');
        ?> 
        <link href="css/7000.css" rel="stylesheet" type="text/css"/>
		
	<script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/modul-0-splash.js" type="text/javascript"></script>
    </head> 

    <body> 
        <?php include '../7000/7000-content.php'; ?>
    </body>
</html>