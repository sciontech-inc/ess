
<div id="compensation_tab" class="form-tab">
    <h3>COMPENSATION, TAXES AND BENEFITS TAB</h3>
    <br>
    <div class="row">
        <div class="col-12">
            <h4>COMPENSATION AND TAXES</h4>
            <div class="form-group" style="max-width:300px;">
                <label>Monthly Compensation</label>
                <input type="text" class="form-control" id="monthly_compensation" name="monthly_compensation" placeholder="AMOUNT"/>
            </div>
            <div class="form-group" style="max-width:300px;">
                <label>Annual Compensation</label>
                <input type="text" class="form-control" id="annual_compensation" name="annual_compensation" placeholder="AMOUNT">
            </div>
            <div class="form-group" style="max-width:300px;">
                <label>Tax</label>
                <input type="text" class="form-control" id="tax" name="tax" placeholder="AMOUNT">
            </div>
            <br>
        </div>
        <div class="col-12">
            <h4>GOVERNMENT MANDATED BENEFITS</h4>
            <div class="row">
                <div class="col-3">
                    <select name="government_mandated_benefits" id="government_mandated_benefits" class="form-control"></select>
                </div>
                <div class="col-3">
                    <input type="text" id="government_mandated_benefits_amount" name="government_mandated_benefits_amount" class="form-control" placeholder="AMOUNT">
                    <br>
                </div>
                <div class="col-12">
                    <table id="government_mandated_benefits_table" class="table table-striped" style="width:100%"></table>
                </div>
            </div>
            <br>
            <br>
        </div>
        <div class="col-12">
            <h4>OTHER COMPANY BENEFITS</h4>
            <div class="row">
                <div class="col-3">
                    <select name="other_company_benefits" id="other_company_benefits" class="form-control"></select>
                </div>
                <div class="col-3">
                    <input type="number" id="other_company_benefits_amount" name="other_company_benefits_amount" class="form-control" placeholder="AMOUNT">
                    <br>
                </div>
                <div class="col-12">
                    <table id="other_company_benefits_amount_table" class="table table-striped" style="width:100%"></table>
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>
</div>