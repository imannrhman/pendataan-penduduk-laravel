<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">{{ config('app.name') }}</a>
        </div>

        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">RT13</a>
        </div>

        <ul class="sidebar-menu">
            <li class="nav-item dropdown">
                <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i> <span>Manage Warga</span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('keluarga.index')}}">Data Keluarga </a></li>
                    <li><a href="{{route('keluarga.import')}}">Import Data</a></li>
                    <li><a href="{{route('keluarga.import')}}">Ekspor Data</a></li>
                    <li><a href="{{route('dashboard')}}">Filter Data</a></li>
                </ul>
            </li>


            <li class="nav-item dropdown">
                <a href="{{route('rt.index')}}" class="nav-link"><i class="fas fa-user-group"></i> <span>Manage RT</span></a>
            </li>

            <li class="nav-item">
                <a href="{{route('dashboard')}}" class="nav-link"><i class="fas fa-user-group"></i> <span>Manage RW</span></a>
            </li>

            <li class="nav-item">
                <a href="{{route('dashboard')}}" class="nav-link"><i class="far fa-newspaper"></i> <span>Manage Berita</span></a>
            </li>

            <li class="nav-item">
                <a href="{{route('dashboard')}}" class="nav-link"><i class="fas fa-display"></i> <span>Manage Layanan</span></a>
            </li>
        </ul>
    </aside>
</div>
