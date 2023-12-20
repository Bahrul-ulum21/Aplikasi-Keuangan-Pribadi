<!-- style css animasi -->
<style>
    @keyframes shake {
        0%, 100% {
            transform: translateX(0);
        }
        25% {
            transform: translateX(-5px);
        }
        50% {
            transform: translateX(5px);
        }
        75% {
            transform: translateX(-5px);
        }
    }

    .nav-item:hover .menu-title {
        animation: shake 0.5s ease-in-out;
    }

    .menu-title {
        display: flex;
        align-items: center;
        gap: 8px;
    }
</style>
<!-- end style css animasi -->

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ asset('assets/images/faces/face1.jpg')}}" alt="profile">
                    <span class="login-status online"></span>
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2"> {{ Auth::user()->username }}</span>
                    <span class="text-secondary text-small">{{ Auth::user()->email }}</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('account.dashboard.index') }}">
                <span class="menu-title">
                    <i class="mdi mdi-home menu-icon"></i>
                    Dashboard
                </span>
            </a>
        </li>
        @if (auth()->user()->role == 'user')
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">
                    <i class="mdi mdi-server-security menu-icon"></i>
                    KATEGORI
                </span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('account.categories_debit.index') }}" >Uang Masuk</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('account.categories_credit.index') }}">Uang Keluar</a></li>
                </ul>
            </div>
        </li>       
        @endif
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
                <span class="menu-title">
                    <i class="mdi mdi-cash-multiple menu-icon"></i>
                    TRANSAKSI
                </span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('account.debit.index') }}">Uang Masuk</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('account.credit.index') }}">Uang Keluar</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
                <span class="menu-title">
                    <i class="mdi mdi-chart-areaspline menu-icon"></i>
                    LAPORAN
                </span>
                <i class="menu-arrow"></i>
            </a>
            <!-- Menambahkan sub-menu untuk laporan -->
            <div class="collapse" id="ui-basic2">
                <ul class="nav flex-column sub-menu">
                    <!-- Tambahkan item laporan di sini -->
                    <li class="nav-item"><a class="nav-link" href="{{ route('account.laporan_debit.index') }}">Uang Masuk</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('account.laporan_credit.index') }}">Uang Keluar</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
