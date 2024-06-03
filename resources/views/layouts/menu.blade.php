{{-- CRSF TOKEN --}}
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link">
        <i class="nav-icon fas fa-home"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('data') }}" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>Data Kas</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>User</p>
    </a>
</li>