<?php
include 'head.php';
include 'fonts.php';
 ?>
  <body>

      <h1>select the user<h1>

        <!-- flexbox-->


<div class="gallery-container">
  <!-- to hold for teacher and for students respectively-->

  <a href="teachlogin.php">
  <div class="teacher">
<i class="fas fa-chalkboard-teacher fa-8x"></i><br><p>Teacher</p>
  </div>
  </a>
  <a href="stdlogin.php">
  <div class="student">
<i class="fas fa-user-graduate fa-8x"></i><br><p>Student/Parent </p>
  </div>
  </a>
</div>


<?php
include "footer.php";
 ?>
