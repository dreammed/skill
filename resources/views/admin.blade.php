@extends('layout.main')

@section('content')
    <!-- DataTales Example -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">
            {{-- {{
				$user = Auth::user()
			}} --}}
            <!-- Earnings (Monthly) Card Example -->
            {{-- <div class="col-xl-3 col-md-6 mb-4"> --}}
            @if (Auth::user()->emp_type_id == 1)
                <div class="col-4 mb-4">
                    <a href="{{ url('/employee/') }}">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                            <h3>จัดการพนักงาน</h3>
                                        </div>
                                        <div class="col-auto">
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div> --}}
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
				<div class="col-4 mb-4">
                    <a href="{{ url('/enrols/create') }}">
                        <div class="card border-left-secondary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                            <h3>ลงเวลาการปฏิบัติงาน (เจ้าหน้าที่)</h3>
                                        </div>
                                        <div class="col-auto">
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div> --}}
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clock fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endif
            @if (Auth::user()->emp_type_id == 1 || Auth::user()->emp_type_id == 2)
                <div class="col-4 mb-4">
                    <a href="{{ url('/reports/all/' . getCurrentYear() . '-' . getCurrentMonth() . '-1/' . getCurrentYear() . '-' . getCurrentMonth() . '-' . getLastDay(now()) . '') }}">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            <h3>รายงานการมาปฏิบัติงานพนักงานทั้งหมด</h3>
                                        </div>
                                        <div class="col-auto">
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-bars fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endif

            <div class="col-4 mb-4">
                <a href="{{ url('/enrols/self') }}">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        <h3>ลงเวลาการปฏิบัติงาน</h3>
                                    </div>
                                    <div class="col-auto">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user-clock fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            {{-- <div class="col-xl-3 col-md-6 mb-4"> --}}
            <div class="col-4 mb-4">
                <a href="{{ url('/enrols/self/views/' . getCurrentYear() . '-' . getCurrentMonth() . '-1/' . getCurrentYear() . '-' . getCurrentMonth() . '-' . getLastDay(now()) . '') }}">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        <h3>รายงานการมาปฏิบัติงาน</h3>
                                    </div>
                                    <div class="col-auto">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            {{-- <div class="col-xl-3 col-md-6 mb-4"> --}}
            <div class="col-4 mb-4">
                <a href="{{ url('/calendar') }}">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        <h3>ปฏิทิน</h3>
                                    </div>
                                    <div class="col-auto">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                    </div>
                                    {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">detail</div> --}}
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
