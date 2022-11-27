<!-- Topbar -->
<nav class="navbar navbar-expand text-white navbar-light topbar static-top shadow" style="background-color: 865FDE;">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <div>
        <h5>การไฟฟ่าส่วนภูมิภาค เขต.1 ภาคกลาง จ.พระนครศรีอยุธยา</h5>
    </div>

    {{-- @auth --}}
        @php
            // $user = Session::get('user');
            // $user = json_encode($user);
            // $user = json_decode($user);
            $user = Auth::user();
            // $sdata = Session::all();
        @endphp
    {{-- @endauth --}}
     {{-- {{$sdata}} --}}
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline">
                    {{-- {{$user}} --}}
                    @isset($user)
                        {{ $user->emp_id }} {{ $user->name }} <br>
                        {{ $user->NewOrganizationalCode }}<br>
                    @endisset
                    {{-- กองบริการลูกค้า (ก.1กบล.) --}}
                </span>
                <i class="fas fa-user fa-lg fa-fw mr-2"></i>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a href="{{ url('/employee/' . $user->emp_id . '/edit') }}" class="dropdown-item">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    ข้อมูลบุลคล
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    ออกจากระบบ
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">ต้องการออกจากระบบใช่หรือไม่</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            {{-- <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div> --}}
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                <a href="{{ url('/logout') }}" class="btn btn-primary">ออกจากระบบ</a>
            </div>
        </div>
    </div>
</div>
