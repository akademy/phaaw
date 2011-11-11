<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Page One</title>
</head>
<body>
<header>Page link test</header>
<nav>
<a href="page1.php">Page One</a><a href="page2.php">Page Two</a><a href="page3.php">Page Three</a>
</nav>
<section id="main">
<?php
require_once( "content.inc.php" );
?>
</section>
<footer>End</footer>
</body>
<foot>
<?php
require_once( "javascript.inc.php" );
?>
</foot>
</html>
