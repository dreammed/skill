<!-- Topbar -->
@php
    $user = Auth::user();
@endphp

<div class="container-fluid">
    <a class="navbar-brand" href="#">C1 SKILL CHALLENGER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
                <a href="{{url('/home')}}" class="nav-link {{ Request::is('home') ? 'active' : '' }}" >Home</a>
            </li>
            <li class="nav-item ">
                <a href="{{route('todo.index')}}" class="nav-link {{ Request::is('todos') ? 'active' : '' }}" >Todo</a>
            </li>
        </ul>
        <div class="dropdown">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32"
                    class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small">
                <li>
                    <a href="{{ url('/me/' . $user->id) }}" class="dropdown-item">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        ข้อมูลบุลคล
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#logoutModal">ออกจากระบบ</a></li>
            </ul>
        </div>
        <span class="me-2 text-light">
            @isset($user)
                {{ $user->emp_id }} {{ $user->name }} <br>
                {{ $user->NewOrganizationalCode }}<br>
            @endisset
        </span>
    </div>
</div>

<!-- End of Topbar -->
<!-- Logout Modal-->
<!-- Modal -->
<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="logoutModalLabel">ออกจากระบบ</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            ต้องการออกจากระบบใช่หรือไม่
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
          <a href="{{ url('/logout') }}" class="btn btn-primary">ออกจากระบบ</a>
        </div>
      </div>
    </div>
</div>
{{-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">ต้องการออกจากระบบใช่หรือไม่</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                <a href="{{ url('/logout') }}" class="btn btn-primary">ออกจากระบบ</a>
            </div>
        </div>
    </div>
</div> --}}
