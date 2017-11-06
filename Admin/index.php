<?php
/*
=================================================================================
================================ /Backstage/ Index page =======================
=================================================================================
*/
include 'init.php';
?>

  <!--** start index page **-->
  <div class="admin-page">
    <h4>Welcome Egy-inventors Admin</h4>
    <div class="container"><!--** start container **-->

      <div class="header">
        <ul id="slide-out" class="side-nav">
          <li><div class="user-view">
            <div class="background">
              <img src="images/office.jpg">
            </div>
            <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
            <a href="#!name"><span class="white-text name">John Doe</span></a>
            <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
          </div></li>
          <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
          <li><a href="#!">Second Link</a></li>
          <li><div class="divider"></div></li>
          <li><a class="subheader">Subheader</a></li>
          <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
        </ul>

        <a href="#" data-activates="slide-out" class="btn-floating btn-large waves-effect waves-light red button-collapse light-blue"><i class="material-icons">add</i></a>

      </div>


      <div class="row"><!--row -->

        <div class="col s12 m6 l4">
          <ul class="collection with-header">
            <li class="collection-header"><h5>First Names</h4></li>
            <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons blue-text">create</i></a></div></li>
            <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons blue-text">create</i></a></div></li>
            <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons blue-text">create</i></a></div></li>
            <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons blue-text">create</i></a></div></li>
          </ul>
          </ul>
        </div>

        <div class="col s12 m6 l4">
          <ul class="collection with-header">
            <li class="collection-header"><h5>First Names</h4></li>
            <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons blue-text">create</i></a></div></li>
            <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons blue-text">create</i></a></div></li>
            <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons blue-text">create</i></a></div></li>
            <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons blue-text">create</i></a></div></li>
          </ul>
        </div>

        <div class="col s12 m6 l4">
          <ul class="collection with-header">
            <li class="collection-header"><h5>First Names</h4></li>
            <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons blue-text">create</i></a></div></li>
            <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons blue-text">create</i></a></div></li>
            <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons blue-text">create</i></a></div></li>
            <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons blue-text">create</i></a></div></li>
          </ul>
        </div>

      </div><!--row -->

    </div><!--** end container **-->

  </div>
<!--** end index page **-->
<?php include $tpl . "footer.php"; ?>
