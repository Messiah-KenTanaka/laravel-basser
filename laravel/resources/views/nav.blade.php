<nav class="navbar navbar-expand navbar-light dusty-grass-gradient">

  <a class="navbar-brand" href="/"><i class="fa-solid fa-fish mr-1"></i><b>BASSER</b><i class="fa-solid fa-fish ml-1"></i></a>

  <ul class="navbar-nav ml-auto">

    <li class="nav-item">
      <a class="nav-link" href=""><i class="fas fa-user"></i>登録</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href=""><i class="fas fa-sign-in-alt"></i>ログイン</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href=""><i class="fas fa-pen mr-1"></i>投稿</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <button class="dropdown-item" type="button"
                onclick="location.href=''">
          マイページ
        </button>
        <div class="dropdown-divider"></div>
        <button form="logout-button" class="dropdown-item" type="submit">
          ログアウト
        </button>
      </div>
    </li>
    <form id="logout-button" method="POST" action="">
    </form>
    <!-- Dropdown -->

  </ul>

</nav>
