<?php
require_once('/Applications/mampstack-7.4.14-0/apache2/htdocs/lib2/print.php');
require('view/top.php');
 ?>

<a href="create.php">create</a>
<?php if(isset($_GET['id'])) { ?>
  <a href="update.php?id=<?php echo $_GET['id'];?>">update</a>
  <form action = "delete_process.php" method="post">
    <input type ="hidden" name="id" value ="<?=$_GET['id']?>">
    <input type="submit" value="delete">
  </form>
<?php } ?>

<h2>
  <?php
  print_title();
   ?>
</h2>
<?php
print_description();
?>
<?php
require('view/bottom.php');
 ?>
