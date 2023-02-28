
<div id="employment_tab" class="form-tab">
    <h3>EMPLOYMENT TAB</h3>
    <div class="row">
        <div class="col-xl-4 col-md-12">
            <div class="form-group classes_id">
                <label>Classes <span class="required">*</span></label>
                <select name="classes_id" id="classes_id" class="form-control">
                    <option value="">Please select classes</option>
                    @foreach ($classes as $item)
                    <option value="{{$item->id}}">{{$item->description}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xl-4 col-md-12">
            <div class="form-group position_id">
                <label>Position <span class="required">*</span></label>
                <select name="position_id" id="position_id" class="form-control">
                    <option value="">Please select position</option>
                    @foreach ($position as $item)
                    <option value="{{$item->id}}">{{$item->description}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xl-4 col-md-12">
            <div class="form-group department_id">
                <label>Department <span class="required">*</span></label>
                <select name="department_id" id="department_id" class="form-control">
                    <option value="">Please select department</option>
                    @foreach ($department as $item)
                    <option value="{{$item->id}}">{{$item->description}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="form-group employment_date">
                <label>Date of Employment <span class="required">*</span></label>
                <input type="date" class="form-control" id="employment_date" name="employment_date">
            </div>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="form-group tax_rate">
                <label>Tax Rate</label>
                <input type="number" class="form-control" id="tax_rate" name="tax_rate">
            </div>
        </div>
    </div>
</div>