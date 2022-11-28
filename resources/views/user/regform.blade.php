<div class="form-floating">
    <input type="text" class="form-control" id="name" name="name" placeholder="ระบุชื่อ - สกุล"
    value="{{ isset($user->name) ? $user->name : '' }}"
    required>
    <label for="name">ชื่อ - สกุล </label>
</div>
<div class="form-floating">
    <input type="text" class="form-control" id="tel" name="tel" placeholder="ระบุโทรศัพท์"
    value="{{ isset($user->tel) ? $user->tel : '' }}"
    required>
    <label for="tel">โทรศัพท์</label>
</div>
<div>
    <div class="form-floating">
        <input type="file" class="form-control" id="pic" name="pic" placeholder="กรุณาเลือกรูป" required>
        <label for="pic">pic</label>
    </div>
    <div class="">
        <input class="form-check-input" type="checkbox" id="private" name="private"
        {{ isset($user->private) ? 'checked="checked"': ''}}>
        <label for="private">เปิดเผยข้อมูล</label>
    </div>
</div>
<div class="form-group col-lg-6">
    <label for="lang_id"></label>
    <select class="form-control" id="lang_id" name="lang_id" required>
        <option value="">เลือกประเภทพพนักงาน</option>
        <option value="1" {{ isset($user) ? ($user->lang_id == 1 ? 'selected="selected"' : '') : '' }}>C#
        </option>
        <option value="2" {{ isset($user) ? ($user->lang_id == 2 ? 'selected="selected"' : '') : '' }}>JAVA
        </option>
        <option value="3" {{ isset($user) ? ($user->lang_id == 3 ? 'selected="selected"' : '') : '' }}>PHP
        </option>
        <option value="4" {{ isset($user) ? ($user->lang_id == 3 ? 'selected="selected"' : '') : '' }}>
            Python
        </option>
        <option value="5" {{ isset($user) ? ($user->lang_id == 3 ? 'selected="selected"' : '') : '' }}>
            Javascript</option>
    </select>
</div>
<div class="form-floating">
    <input type="text" class="form-control" id="username" name="username" placeholder="ระบุรหัสพนักงาน"
    value="{{ isset($user->username) ? $user->username : '' }}"
    required>
    <label for="username">รหัสพนักงาน</label>
</div>
{{-- @isset(!$user) --}}
<div class="form-floating">
    <input type="password" class="form-control" name="basepassword" id="basepassword" placeholder="ระบุรหัสผ่าน">
    <label for="basepassword">รหัสผ่าน</label>
</div>
{{-- @endisset --}}


<div class="form-floating">
    <input type="password" class="form-control" name="password" id="password" placeholder="Password"
    value="{{ isset($user->passowrd) ? $user->passoword : '' }}"
    required>
    <label for="password">ยืนยันรหัสผ่าน</label>
</div>
