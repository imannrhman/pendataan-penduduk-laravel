<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
          <a href="{{ route('dashboard') }}">Data Warga</a>
      </div>

      <div class="sidebar-brand sidebar-brand-sm">
          <a href="{{ route('dashboard') }}">DW</a>
      </div>

      <ul class="sidebar-menu">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Manage Warga</span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('keluarga')}}">Data Keluarga </a></li>
            <li><a href="{{route('dashboard')}}">Data RT</a></li>
            <li><a href="{{route('dashboard')}}">Data RW</a></li>
          </ul>
        </li>
      </ul>
  </aside>
</div>