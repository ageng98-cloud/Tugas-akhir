<header class="main-header">
  <!-- Logo -->
  <div class="logo">
<span class="logo-lg"><img src="smkn41.png"</span>
</div>
  <!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <span class="hidden-xs" style="text-transform:capitalize;"><?php echo "".$_SESSION["NIP"]."" ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <!--<h3><p>Akademik</p></h3>-->
    <p style="text-transform:capitalize;">Hi <?php echo "".$_SESSION["NIP"]."" ?>, </p>
    <p>Welcome To monitoring siswa</p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
    <div class="pull-left">
                <a href="../1/tambah_edit.php" class="btn btn-primary">Tambah user<i class="fa fa-lock"></i></a>
              </div>
              <div class="pull-right">
                <a href="../logout.php" class="btn btn-primary">Sign out <i class="fa fa-sign-out"></i></a>
              </div>
            </li>
        </li>
      </ul>
    </div>
  </nav>

</header>
