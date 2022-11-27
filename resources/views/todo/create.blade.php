@extends('../layout.main')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">สร้าง Todo</h1>
    <div class="mt-2 mb-2">
        <a href="{{ url('/todos') }}" class="btn btn-secondary">ย้อนกลับ</a>
    </div>
    <form method="POST" action="{{ url('/todos') }}" enctype="multipart/form-data" style="width:50%">
        @method('POST')
        @csrf
        @include ('todo.form')
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="เพิ่ม">
        </div>
    </form>
@endsection
