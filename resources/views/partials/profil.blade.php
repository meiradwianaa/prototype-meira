<div class="row">
    <div class="col-sm-3">
        <div class="text-black rounded shadow sidebar py-5 px-5">
        <div class="text-center admin-title">
            Hallo, {{ auth()->user()->name }}!!
        </div>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="my-1">
                    <span class="ml-3 sidebar-text">
                        Informasi Akun
                    </span>           
            </li>
            <li class="my-1">
                <a href="/profil" class="nav-link">
                    <span class="ml-3 sidebar-text">
                        Profil
                    </span>
                </a>
            </li>
            <li class="my-2">
                <a href="/alamat" class="nav-link">
                    <span class="ml-3 sidebar-text">
                        Alamat
                    </span>
                </a>
            </li>
            <li class="my-2">
                <a href="/password" class="nav-link">
                    <span class="ml-3 sidebar-text">
                        Ganti Password
                    </span>
                </a>
            </li>
            <li class="my-2">
                <a href="/riwayatpembelian" class="nav-link">
                    <span class="ml-3 sidebar-text">
                        Riwayat Pembelian
                    </span>
                </a>
            </li>
            <li class="my-2">
                <a href="/wishlist" class="nav-link">
                    <span class="ml-3 sidebar-text">
                        Wishlist
                    </span>
                </a>
            </li>
        </ul>
        </div>
    </div>