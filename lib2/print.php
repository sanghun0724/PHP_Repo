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
    $basename = basename($_GET['id']);
  echo file_get_contents("/Applications/mampstack-7.4.14-0/apache2/htdocs/data/".$basename);
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
