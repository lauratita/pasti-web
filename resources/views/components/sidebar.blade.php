<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">PASTI</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">PST</a>
        </div>
        <ul class="sidebar-menu">
            {{-- DASHBOARD --}}
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown {{ isset($type_menu) && $type_menu === 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class=""><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>

            {{-- DATA SISWA --}}
            <li class="menu-header">Data</li>
            <li class="nav-item dropdown {{ isset($type_menu) && $type_menu === 'data' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-user-graduate"></i>
                    <span>Siswa</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('data-siswa') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('data.siswa') }}">Daftar Siswa</a>
                    </li>
                    <li class="{{ Request::is('kelas') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('kelas') }}">Kelas</a>
                    </li>
                    <li class="{{ Request::is('mata-pelajaran') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('mata.pelajaran') }}">Mata Pelajaran</a>
                    </li>
                    <li class="{{ Request::is('jadwal-mata-pelajaran') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('jadwal.mata.pelajaran') }}">Jadwal Mata Pelajaran</a>
                    </li>
                    <li class="{{ Request::is('detail-mata-pelajaran') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('detail.mata.pelajaran') }}">Detail Mata Pelajaran</a>
                    </li>
                </ul>
            </li>

            {{-- WALI MURID --}}
            <li class="{{ Request::is('wali-murid') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('wali.murid') }}"><i class="fas fa-user"></i> <span>Wali
                        Murid</span></a>
            </li>

            {{-- PEGAWAI --}}
            <li class="nav-item dropdown {{ isset($type_menu) && $type_menu === 'pegawai' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i> <span>Pegawai</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('daftar-pegawai') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('daftar.pegawai') }}">Daftar Pegawai</a>
                    </li>
                    <li class="{{ Request::is('jenis-pegawai') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('jenis.pegawai') }}">Jenis Pegawai</a>
                    </li>
                </ul>
            </li>

            {{-- SISWA --}}
            <li class="menu-header">Siswa</li>
            <li class="{{ Request::is('presensi') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('presensi') }}"><i class="fas fa-file-lines"></i>
                    <span>Presensi</span></a>
            </li>
            <li class="{{ Request::is('surat-izin') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('surat.izin') }}"><i class="fas fa-envelope"></i><span>Surat
                        Izin</span></a>
            </li>

            {{-- LAPORAN --}}
            <li class="menu-header">Laporan</li>
            <li class="{{ Request::is('rekap') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('rekap') }}"><i class="fas fa-folder-open"></i></i>
                    <span>Rekap</span></a>
            </li>
    </aside>
</div>
