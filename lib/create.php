<?php
function print_title() {
if (isset($_GET['id'])) {
  echo $_GET['id'];
} else {
  echo "welcome";
}
}
function print_description() {
  if(isset($_GET['id'])) {
  echo file_get_contents("/Applications/mampstack-7.4.14-0/apache2/htdocs/data/".$_GET['id']);
  } else {
    echo "hello php";
  }
}

function print_list() {
  $list = scandir('/Applications/mampstack-7.4.14-0/apache2/htdocs/data');
  $i = 0;
  while ($i < count($list)) {
    if ($list[$i] != '.') {
      if ($list[$i] != '..') {
    echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
      }
    }
    $i = $i +1;
  }
}
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
</body>
</html>
