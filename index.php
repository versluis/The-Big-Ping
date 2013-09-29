<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>The Big Ping</title>

<!-- this makes iPhone show the content properly -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link href="custom.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1 id="header">The Big Ping</h1>

<table width="100%" border="0">

<?php

$names = file('sample-sites.txt');
foreach ($names as $name) {
   
   $mydomain = substr($name, 0, -1);
   $ip = gethostbyname($mydomain);

  echo '<tr><td class="domain">' . $mydomain . '</td><td class="ip">' . $ip . '</td></tr>';
  }

?>

</table>
<h4 class="footer">Version 0.1.1 Build 0702.1233<br>&copy; 2013 Jay Versluis</h4>

<p>&nbsp;</p>
</body>
</html>