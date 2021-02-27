<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand py-4 px-4 mb-4">
            <!-- <a href="{{ route('dashboard') }}"><img src="{{ asset('assets/images/logo-siklab.png') }}" alt="Logo Siklab"></a> -->
            <a href="{{ route('dashboard') }}">MonkerMart</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <!-- <a href="{{ route('dashboard') }}">
                <img class="d-inline-block" width="32px" height="30.61px" src="{{ asset('assets/images/favicon.png') }}" alt="">
            </a> -->
            <a href="{{ route('dashboard') }}">
            <i class="fas fa-store"></i>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li>
                <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Menu</li>
            <li>
                <a class="nav-link" href="{{ route('barang.index') }}"><i class="fas fa-boxes"></i><span>Daftar Barang</span></a>
            </li>
            <li>
                <a class="nav-link" href="#"><i class="fas fa-dolly-flatbed"></i><span>Pesanan</span></a>
            </li>
            <li>
                <a class="nav-link" href="#"><i class="fas fa-handshake"></i><span>Peminjaman</span></a>
            </li>
            <li>
                <a class="nav-link" href="#"><i class="fas fa-dollar-sign"></i><span>Piutang</span></a>
            </li>
            <li class="menu-header">User</li>
            <li>
                <a href="{{ route('user') }}" class="nav-link" ><i class="fas fa-chart-bar"></i> <span>User</span></a>
            </li>
        </ul>
    </aside>
</div>