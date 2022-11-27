@extends('../layout.main')
@section('content')
    <h1 class="h3 mb-2 text-gray-800">แก้ไข TODO #{{ $todo->id }}</h1>
    <div class="mt-2 mb-2">
        <a href="{{ url('/todos') }}" class="btn btn-secondary">ย้อนกลับ</a>
    </div>
    {{-- action="{{ url('/') }}/todo/ {{ $todo->id }}" method="POST" --}}
    <form method="POST" action="{{ url('/todos/' . $todo->id) }}" enctype="multipart/form-data" style="width:50%">
        @csrf
        @method('PATCH')
        {{-- {{$todo}} --}}
        @include ('todo.form')
        <div class="form-group">
            <input class="btn btn-warning" type="submit" value="แก้ไข">
        </div>
    </form>
@endsection
