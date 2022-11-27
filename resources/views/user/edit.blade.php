@extends('../layout.main')
@section('content')
    <h1 class="h3 mb-2 text-gray-800">User {{ $user->emp_id }} : {{ $user->name }} </h1>
    <div class="mt-2 mb-2">
        <a href="{{ url('/todos') }}" class="btn btn-secondary">ย้อนกลับ</a>
    </div>
    {{-- action="{{ url('/') }}/user/ {{ $user->id }}" method="POST" --}}
    <form method="POST" action="{{ url('/users/' . $user->id.'/edit') }}" enctype="multipart/form-data" style="width:50%">
        @csrf
        @method('PATCH')
        {{-- {{$user}} --}}
        @include ('user.form')
        <div class="form-group">
            <input class="btn btn-warning" type="submit" value="แก้ไข">
        </div>
    </form>
@endsection
