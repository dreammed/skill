<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
// $value= "1";
$value = (object)Session::get('user');
// Session::flash('userData', $value);
    // session(['key' => $res]);
// $value = json_encode($value);
// $value = json_decode($value);
?>
{{-- {{print_r($value)}} --}}
{{$user}}
{{$value->emp_id}}
{{-- {{$value["emp_id"]}} --}}

{{-- {{ 'hello' }} --}}
{{print_r($value)}}
{{-- {{print_r($data)}} --}}

{{-- {{$response}} --}}
 <a href="{{ url('/home') }}" class="btn btn-primary">go home</a>

</body>
</html>
