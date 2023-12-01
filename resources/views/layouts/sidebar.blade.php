        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile"><a href="#" class="nav-link">
                        <div class="nav-profile-image"><img src="assets/images/faces/face1.jpg" alt="profile"><span
                                class="login-status online"></span>
                        </div>
                        <div class="nav-profile-text d-flex flex-column">
                            <span class="font-weight-bold mb-2 profile-name">
                                {{ Auth::user()->name }}
                            </span>
                            <span class="text-secondary text-small">{{ Auth::user()->email }}</span>
                        </div>
                        
                        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                    </a></li>
                <li class="nav-item"><a class="nav-link" href="/home"><span class="menu-title">Dashboard</span><i
                            class="mdi mdi-home menu-icon"></i></a></li>
                <li class="nav-item">  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic"
                        aria-expanded="false" aria-controls="ui-basic"><span class="menu-title">Kategori</span><i
                            class="menu-arrow"></i><i class="mdi mdi-server-security"></i></a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="/kategoriuangmasuk">Uang Masuk</a></li>
                            <li class="nav-item"><a class="nav-link" href="/kategoriuangkeluar">Uang Keluar</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="collapse" href="#ui-basic1"
                    aria-expanded="false" aria-controls="ui-basic"><span class="menu-title">Transaksi</span><i
                        class="menu-arrow"></i><i class="mdi mdi-cash-multiple"></i></a>
                <div class="collapse" id="ui-basic1">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="/transaksiuangmasuk">Uang Masuk</a></li>
                        <li class="nav-item"><a class="nav-link" href="/transaksiuangkeluar">Uang Keluar</a></li>
                    </ul>
                </div>
            </li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="collapse" href="#ui-basic"aria-expanded="false" aria-controls="ui-basic"><span class="menu-title">Laporan</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-chart-areaspline"></i></a></li>
            </ul>
        </nav>
<style>
    .profile-name {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 150px;
}
</style>