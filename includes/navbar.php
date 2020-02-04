<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">divcibare.com</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php">KONTAKT</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        NALOG
      </a>
      <div class="dropdown-menu">
        <?php if(isset($_SESSION['username'])) : ?>
        <a class="dropdown-item" href="profile.view.php">PROFIL</a>
        <a class="dropdown-item" href="logout.php">ODJAVA</a>
        <?php else : ?>
        <a class="dropdown-item" href="register.view.php">REGISTRACIJA</a>
        <a class="dropdown-item" href="login.view.php">PRIJAVA</a>
        <?php endif; ?>
      </div>
    </li>
  </ul>
</nav>
<br>
