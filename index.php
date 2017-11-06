<?php
/*
=================================================================================
=============================== /interface/ Index page ==========================
=================================================================================
*/
    ob_start();
    session_start();

    //Include Header & navBar
    include 'init.php';
 ?>
 <div class="index-page">
   <h1>Index Page</h1>
 </div>

<?php
  include $tpl . 'footer.php';
  ob_end_flush();
?>
