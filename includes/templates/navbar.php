<?php
/*
=================================================================================
================================== /interface/ navBar page ======================
=================================================================================
*/
if(!isset($_SESSION)){session_start();}

 if (isset($_SESSION['userEmail'])) {
        header('Location: https://www.google.com'); //Redirect To Dashbord Page
    }

    include_once 'Admin/contact.php';

    // Check If Coming Form HTTP Post Request

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $userEmail  = $_POST['user'];
        $password   = $_POST['pass'];
        $hashedpass = sha1($password);

        // Check If User Exist In Database

        $stmt = $con->prepare("SELECT 
                                   UserID, Email, Password 
                                FROM 
                                    Users 
                                WHERE 
                                    Email = ? 
                                AND 
                                    Password = ? 
                                AND 
                                    GroupID = 1
                                LIMIT 1");
        $stmt->execute(array($userEmail, $hashedpass));
        $row = $stmt->fetch();
        $count = $stmt->rowCount();

        //if Count > 0 This Mean The Databese Contain About Thih Username 
        if ($count > 0) {
            
            $_SESSION['userEmail'] = $userEmail;
            $_SESSION['ID'] = $row['UserID'];
            header('Location: https://www.google.com'); //Redirect To index Page
            exit();
        } else {
            
            exit('Error');
        }
   }







?>
<nav class="light-blue darken-4">
  <div class="container">
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">Logo</a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a class="waves-effect waves-light modal-trigger" href="#log-in">log In</a></li>

      <li><a class="waves-effect waves-light" href="#">Sign Up</a></li>
      <li><a class="waves-effect waves-light" href="#">prodact</a></li>
      <li><a class="waves-effect waves-light" href="#">Contact us</a></li>
      <li><a class="waves-effect waves-light"><i class="material-icons">shopping_cart</i></a></li>
      <li><a class="dropdown-button waves-effect waves-light" href="#!" data-activates="dropdown1">        <i class="material-icons right">language</i></a></li>
    </ul>
    <ul class="side-nav" id="mobile-demo">
      <li><a href="sass.html">Sass</a></li>
      <li><a href="badges.html">Components</a></li>
      <li><a href="collapsible.html">Javascript</a></li>
      <li><a href="mobile.html">Mobile</a></li>
    </ul>
  </div>
  </div>

  <!-- * lng  dropdown * -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li class="divider"></li>
    <li><a href="#!">two</a></li>
    </ul>

<!-- * login modal * -->
<div id="log-in" class="modal">
  <div class="modal-content">
    <div class="row">
      <form class="col s12" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" name="user" class="validate">
            <label for="email">Email</label>
          </div>
        </div>


        <div class="row">
          <div class="input-field col s12">
            <input id="password" type="password" name="pass" class="validate" autocomplete="off">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <input type="submit" class="modal-action modal-close waves-effect waves-green btn-flat blue" name="" value="log in">
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
<!-- * sign in modal * -->
<div id="modal2" class="modal">
  <div class="modal-content">
    <div class="row"> 
</nav>
