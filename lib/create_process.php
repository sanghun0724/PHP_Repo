<?php
file_put_contents('/Applications/mampstack-7.4.14-0/apache2/htdocs/data/'.$_POST['title'],$_POST['description']);
header('Location: /lib/index.php?id='.$_POST['title']);
 ?>
