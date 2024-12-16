  <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

          <a href="index.html" class="logo d-flex align-items-center">
              <!-- Uncomment the line below if you also wish to use an image logo -->
              <!-- <img src="assets/img/logo.png" alt=""> -->
              <h1 class="sitename">Bootslander</h1>
          </a>

          <nav id="navmenu" class="navmenu">
              <ul>
                  @if (Request::is('/'))
                      <li><a href="/" class="active">Home</a></li>
                  @else
                      <li><a href="/">Home</a></li>
                  @endif
                  @if (Request::is('buku') || Request::is('detail/*'))
                      <li><a href="/buku" class="active">Buku</a></li>
                  @else
                      <li><a href="/buku">Buku</a></li>
                  @endif
                  </li>
                  <li><a href="/login">Login</a></li>
              </ul>
              <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>

      </div>
  </header>
