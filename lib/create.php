<?php
require_once('/Applications/mampstack-7.4.14-0/apache2/htdocs/lib2/print.php');
require('view/top.php');
 ?>
<a href="create.php">create</a>
<form action="create_process.php"method="post">
  <p>
    <input type="text" name="title" placeholder="Title">
  </p>
  <p>
    <textarea name="description" placeholder="Description"></textarea>
  </p>
  <p>
    <input type = "submit"
  </p>
</form>
<?php
require('view/bottom.php');
 ?>
