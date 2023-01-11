@extends('../layout.main')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">ค้นหาข้อมูลพนักงาน</h1>
    <table class="table">
        <tr>
            <th>รูป</th>
            <th>ชื่อ</th>
            <th>ภาษา</th>
            <th>เบอร์โทร</th>

        </tr>

        @foreach ($user as $item)
            <tr>
                <td> <img src="{{ $item->pic }}" alt="mdo" width="32" height="32" class="rounded-circle"></td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->lang }}</td>
                @if ($item->private == 1)
                    <td>ไม่เปิดเผยข้อมูล</td>
                @else
                    <td>{{ $item->tel }}</td>
                @endif
            </tr>
        @endforeach
    </table>

    <!-- Delete Modal-->
    @foreach ($user as $item)
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
                    <div class="modal-body">ต้องการลบข้อมูล <b> {{ $item->id . ' ' . $item->username }} </b>ใช่หรือไม่
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                        <a href="{{ url('/todos/' . $item->id . '/delete') }}" class="btn btn-primary">ตกลง</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
@section('scripts')
    <script>
        $(function() {
            console.log("hello world")
        });
    </script>
@stop
