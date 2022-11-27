@extends('../layout.main')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">แสดง Todo #{{ $todo->id }}</h1>
    <div class="mt-2 mb-2">
        <a href="{{ url('/todos') }}" class="btn btn-secondary">ย้อนกลับ</a>
    </div>
    @include ('todo.form')
@endsection
