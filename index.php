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

<h1>Index Page</h1>
<!-- Include Footer -->
<?php
  include $tpl . 'footer.php';
  ob_end_flush();
?>