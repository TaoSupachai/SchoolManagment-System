<?php
include 'fonts.php';
 include 'head.php';

  ?>

    <title>School Interaction System</title>

  <body>

<?php
if (isset($_SESSION['uid']) || isset($_SESSION['uid5'])) {
  include 'inside/ever.php';
include 'inside/home.php';
}elseif (isset($_SESSION['id'])) {
  include 'inside/studentever.php';
  include 'inside/home.php';
}else {
  echo '  <img class="blmiki-logo" src="https://lh3.googleusercontent.com/7TEMGSYMfOCJdVYM9iNye4w0YP28ODGo3y6soNQB0sGRfFrtmP1EClvIS3TBU6qWYng=s180"/>
<h1 class="typewriter">Welcome To School Interaction / Managment System  </h1>
<form class="form" action="selection.php" method="post">
  <center><button id="continue_btn" style="position:absolute;
  left:39%;height:40px;width:20%;font-size:25px;" type="submit" name="submit"> Continue <i class="fas fa-angle-double-right fa-1g"></i></button>
</center></form>';
}
 ?>
 <!-- Latest compiled and minified CSS -->

<?php
include "footer.php";
 ?>
