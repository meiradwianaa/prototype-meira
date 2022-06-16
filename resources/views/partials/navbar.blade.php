<nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #FFFFFF">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src={{ asset("./img/logo.png") }} alt="logo" height="50" style="color: #000000">
      </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @auth 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black">
                    Hallo, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/profil">Profil {{ auth()->user()->name }}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form> 
                    </ul>
                </li>

                @else
                <li class="nav-item">
                    <a href="/login" class="btn btn-succes {{ ($active === "login") ? 'active' : '' }}" style="background-color: #C6F1E7"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                @endauth
            </ul>        
        </div>
    </div>
  </nav>
  <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #C6F1E7">
    <div class="container-fluid">
        <div class="nav-item dropdown">
                <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src={{ asset("./img/more.png") }} alt="hamburger" height="30" style="color: #000000"> 
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/artikel"></i> Artikel</a></li>
                  <li><a class="dropdown-item" href="/syarat"></i> Syarat dan Ketentuan</a></li>
                  <li><a class="dropdown-item" href="/kebijakan"></i> Kebijakan Privasi</a></li>
                  <li><a class="dropdown-item" href="/faq"></i> FAQ</a></li>
                  <li><a class="dropdown-item" href="/carabayar"></i> Cara Bayar</a></li>
                </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ms-5">
                    <a class="nav-link" style="color: #000000" href="/aboutus">About Us</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ms-5">
                        <form class="d-flex" role="search" >
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <a class="btn btn-outline-success" type="button"  href="/produk">Search</a>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item ms-2">
                                <a class="nav-link search" style="color: #000000" href="/produk">Selang Oksigen</a>
                            </li>
                        </ul>
                    
                </li>
            </ul>      
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ms-5">
                    <a class="nav-link" style="color: #000000" href="/notifikasi">
                        <img src={{ asset("./img/notif.png") }} alt="hamburger" height="25" style="color: #000000">
                    </a>
                </li>
                <li class="nav-item ms-5">
                    <a class="nav-link" style="color: #000000" href="/keranjang">
                        <img src={{ asset("./img/keranjang.png") }} alt="hamburger" height="25" style="color: #000000">
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
  </nav>