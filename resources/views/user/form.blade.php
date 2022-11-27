<div class="row">
    <div class="form-group col-lg-6 ">
        <label> {{ 'ชื่อ-สกุล' }} </label>
        <input class="form-control form-control-sm" name="name" type="text"
            value="{{ isset($user->name) ? $user->name : '' }}" required>
    </div>
    <div class="form-group col-lg-6">
        <label class="control-label">{{ 'รหัสพนักงาน' }} </label>
        <input class="form-control form-control-sm" name="emp_id" type="text" readonly
            value="{{ isset($user->emp_id) ? $user->emp_id :'' }}" required>
    </div>
</div>
