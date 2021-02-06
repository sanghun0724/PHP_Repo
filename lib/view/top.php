<?php
require_once('/Applications/mampstack-7.4.14-0/apache2/htdocs/lib2/print.php');
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
 </head>
 <title>
   <?php
   if (isset($_GET['id'])) {
     echo $_GET['id'];
   } else {
     echo "welcome";
   }
    ?>
 </title>
<body>
<h1> WEB </h1>
<ol>
<?php
 print_list();
 ?>
</ol>
