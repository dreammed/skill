@extends('../layout.main')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Todo List</h1>
    <div class="mt-2 mb-2">
        <a href="{{ url('/todos/create') }}" class="btn btn-primary">เพิ่ม Todo</a>
    </div>
    <table class="table">
        <tr>
            <th>รหัส</th>
            <th>รายละเอียด</th>
            <th>ผู้บันทึก</th>
            <th></th>
        </tr>
        {{-- {{ $todo }} --}}
        @foreach ($todo as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->user_id }}</td>
                <td>
                    <a href="{{ url('/todos/' . $item->id. '/get') }}" class="btn btn-sm btn-primary">ดูข้อมูล</a>
                    <a href="{{ url('/todos/' . $item->id . '/edit') }}" class="btn btn-sm btn-warning">แก้ไข</a>
                    <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal-{{ $item->id }}"
                        data-id="{{ $item->id }}">ลบ</a>
                </td>
            </tr>
        @endforeach
    </table>

    <!-- Delete Modal-->
    @foreach ($todo as $item)
        <div class="modal fade" id="deleteModal-{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">ลบข้อมูล</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">ต้องการลบข้อมูล <b> {{ $item->id.' '.$item->emp_name }} </b>ใช่หรือไม่ </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                        <a href="{{ url('/todos/'.$item->id. '/delete') }}" class="btn btn-primary">ตกลง</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
