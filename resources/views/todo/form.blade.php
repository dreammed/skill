<div class="row">
    <div class="form-group col-lg-6 ">
        <label> {{ 'ชื่อ-สกุล' }} </label>
        <input class="form-control form-control-sm" name="description" type="text"
            value="{{ isset($todo->description) ? $todo->description : '' }}" required>
    </div>
    <div class="form-group col-lg-6">
        <label class="control-label">{{ 'ผู้บันทึก' }} </label>
        <input class="form-control form-control-sm" name="user_id" type="text" readonly
            value="{{ isset($todo->user_id) ? $todo->user_id : Auth::user()->emp_id  }}" required>
    </div>
</div>
