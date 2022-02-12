<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/index.php">Главная</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="/spisok.php">Просмотр Участников</a>
      </li>
      <li class="nav-item active">
        <?php if(isset($_SESSION['id']) and $_SESSION['id']== 1 or $_SESSION['id']== 2){ ?>
        <a class="nav-link" href="/admin/message.php">Админ</a>
      <?php }else{ ?>
         <a class="nav-link" href="/admin/">Вход в Админа</a>
       <?php } ?>
      </li>
       </ul>
  </div>
</nav>


<a class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
<img width="20" src="https://cdn-icons-png.flaticon.com/512/60/60510.png" alt="">
</a>


<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
<div class="offcanvas-header">
<h5 class="offcanvas-title" id="offcanvasExampleLabel">Менюшка</h5>
<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body">
<div>
<ul >
<li><a class="dropdown-item" href="/index.php">Главная</a></li>
<li><a class="dropdown-item" href="/spisok.php">Просмотр Участников</a></li>
<li><a class="dropdown-item" href="/admin/">Админка</a></li>
</ul>
</div>
</div>
</div>