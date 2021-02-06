<?php
require_once('/Applications/mampstack-7.4.14-0/apache2/htdocs/lib2/print.php');
require('view/top.php');
 ?>

<a href="create.php">create</a>
<?php if(isset($_GET['id'])) { ?>
  <a href="update.php?id=<?php echo $_GET['id'];?>">update</a>
<?php } ?>

<h2>
  <?php
  print_title();
   ?>
</h2>
<?php
print_description();
?>
<form action="update_process.php"method="post">
  <input type = "hidden"name="old_tilte" value="<?=$_GET['id']?>">
  <p>
    <input type="text" name="title" placeholder="Title" value = "<?php print_title(); ?>">
  </p>
  <p>
    <textarea name="description" placeholder="Description"><?php print_description(); ?></textarea>
  </p>
  <p>
    <input type = "submit"
  </p>
</form>
<?php
require('view/bottom.php');
 ?>
