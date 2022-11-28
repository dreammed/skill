<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ค้นหา</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/header.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-12 mt3">
                ค้นหาข้อมูลสมาชิกนักพัฒนาระบบสารสนเทศ
            </div>
        </div>

        <form action="{{url('/search')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
        <div class="row">
            <div class="col-12 mt-3">
                <div class="form-group">
                    <strong>ชื่อ-สกุล</strong>
                    <input type="text"  name="name" class="form-control" placeholder="name">
                    @error('name')
                     <div class="alert alert-danger">{{$message}}</div>                      
                    @enderror
                </div>               
            </div>
            <div class="col-12 mt-3">
                <div class="form-group">
                    <strong>ภาษา programing</strong>
                    <select name="program_lang_type" id="program_lang_type">
                        <option value="1">C#</option>
                        <option value="2">JAVA</option>
                        <option value="3">PHP</option>
                        <option value="4">Python</option>
                        <option value="5">JavaScript</option>
                      </select>
                </div>               
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-primary mt-3">ค้นหา</button>
            
            </div>
        
        </div>
        </form>
        

        <div class="col-12">

            @if ($message = Session::get('success'))
            <div class="alert alert-success mt-3" > {{$message}} </div>
          
                <div>
                    <table class="table table-bordered mt-5">
                        <tr>
                            <th>
                                รูป
                            </th><th>
                                ชื่อ-สกุล.
                            </th>
                            <th>
                                ภาษาโปรแกรมมิ่งที่ถนัด.
                            </th>
                            <th>
                                เบอร์โทรศัพท์.
                            </th>
                        </tr>


                     
                      
                    </table>
           
                </div>
                
                @endif
        </div>
    </div>
</body>
</html>