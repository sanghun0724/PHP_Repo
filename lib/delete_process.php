<?php
unlink('/Applications/mampstack-7.4.14-0/apache2/htdocs/data'.basename($_POST['id']));
header('Location: /lib/index.php');
 ?>
