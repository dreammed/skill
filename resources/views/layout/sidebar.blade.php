
<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/') }}">
            <i class="fas fa-home" style='font-size:20px'></i> หน้าหลัก
        </a>
    </li>


    <li class="nav-item {{ request()->is('*todos') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/todos') }}">
            <i class="fas fa-user-clock" style='font-size:20px'></i> Todo List</a>
    </li>

    {{-- <li class="nav-item {{ request()->is('*enrols/self/views*') ? 'active' : '' }}">
        <a class="nav-link"
            href="{{ url('/enrols/self/views/' . getCurrentYear() . '-' . getCurrentMonth() . '-1/' . getCurrentYear() . '-' . getCurrentMonth() . '-' . getLastDay(now()) . '') }}">
            <i class="fas fa-clipboard-list" style='font-size:20px'></i> รายงานการมาปฏิบัติงาน</a>
    </li> --}}

    {{-- @if (Auth::user()->emp_type_id == 1)
        <li class="nav-item {{ request()->is('*employee*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/employee') }}">
                <i class="fas fa-users" style='font-size:20px'></i> จัดการพนักงาน
            </a>
        </li>

        <li class="nav-item {{ request()->is('*enrols/create*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/enrols/create') }}">
                <i class="fas fa-clock" style='font-size:20px'></i> ลงเวลาการปฏิบัติงาน (เจ้าหน้าที่)</a>
        </li>
    @endif --}}

    {{-- @if (Auth::user()->emp_type_id == 1 || Auth::user()->emp_type_id == 2)
        <li class="nav-item {{ request()->is('*reports/all*') ? 'active' : '' }}">
            <a class="nav-link"
                href="{{ url('/reports/all/' . getCurrentYear() . '-' . getCurrentMonth() . '-1/' . getCurrentYear() . '-' . getCurrentMonth() . '-' . getLastDay(now()) . '') }}">
                <i class="fas fa-bars" style='font-size:20px'></i>รายงานการมาปฏิบัติงานพนักงานทั้งหมด</a>
        </li>
    @endif --}}


    <li class="nav-item {{ request()->is('*calendar*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/calendar') }}">
            <i class="fas fa-calendar" style='font-size:20px'></i> ปฏิทิน
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
